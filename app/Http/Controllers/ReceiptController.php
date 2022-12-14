<?php

namespace App\Http\Controllers;

use App\Models\receipt;
use App\Models\ReceiptDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;

class ReceiptController extends Controller
{
    protected function addToCart(Request $request)
    {
        $request->validate([
            'quantity' => ['required', 'integer'],
        ]);
        
        //check Authenticated user's active receipt.
        //IF the user have an unfinished purchasing, pick that one
        //else, create a new receipt.
        
        // where user receipt last purchase stat is 0
        $receipt = receipt::where('user_id',Auth::user()['id'])
        ->where('purchased',false)
        ->latest()
        ->first();
        
        // if there is no receipt at all, or if there is not receipt that are not purchased, make a new receipt
        if(!$receipt){
            $receipt = new receipt();
            $receipt->user_id = Auth::user()['id'];
            $receipt->totalPrice =0;
            $receipt->totalQuantity =0;
            $receipt->save();
        }
        
        //check if item that we will be adding has existed in the item, if it is, then just add it
        $item = ReceiptDetail::UpdateOrCreate(
            ['receipt_id'=>$receipt->id, 'item_id'=>$request->item_id],
            ['quantity'=> DB::raw('quantity + '.$request['quantity'])],
        );
        $item->save();
        
        $receipt->totalPrice = $receipt->totalPrice+($request->price*$request->quantity);
        $receipt->totalQuantity = $receipt->totalQuantity+($request->quantity);
        $receipt->save();
        
        return redirect('/home');
        
        
        
    }
}
