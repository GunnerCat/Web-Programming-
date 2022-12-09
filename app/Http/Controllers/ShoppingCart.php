<?php

namespace App\Http\Controllers;

use App\Models\receipt;
use App\Models\ReceiptDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ShoppingCart extends Controller
{
    public function showShoppingCart(){
        $receipt = DB::table('receipts')
        ->where('user_id',Auth::user()['id'])
        ->where('purchased',false)
        ->latest()
        ->first();
        // $ReceiptDetail = ReceiptDetail::where('receipt_id',$receipt->id)->with('items')->get();
        $receipt=receipt::with('items')->get();

        return view('content.checkout',compact('receipt'));
    }
}
