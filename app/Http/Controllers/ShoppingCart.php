<?php

namespace App\Http\Controllers;

use App\Models\receipt;
use App\Models\ReceiptDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ShoppingCart extends Controller
{
    private $receipt;
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->receipt=receipt::with('items')
            ->where('user_id',Auth::user()['id'])
            ->where('purchased',false);
            return $next($request);
        });
        
    }
    public function showShoppingCart(){
        $receipt = count($this->receipt->get())==0 ? null : (count($this->receipt->get()[0]['items'])==0? null : $this->receipt->get());
        return view('content.checkout',compact('receipt'));
    }
    public function manageItem(Request $request){
        switch($request->input('action')){
            case 'remove':
                $targetItem = ReceiptDetail::where('receipt_id',$request->receipt_id)
                ->where('item_id',$request->item_id);

                $this->receipt
                ->update(
                    ['totalPrice'=>DB::raw(
                        'totalPrice-'.$this->receipt->get()[0]['items'][$request->item_location]['price']*$targetItem->get()[0]['quantity'])]);
                    
                $targetItem->delete();

                return redirect()->back()->with('message', '$request->id');
                break;
            case 'edit':

                break;

        }


    }
}
