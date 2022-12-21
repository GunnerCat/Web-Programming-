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
            ->where('purchased',false)
            ->latest()
            ->first();
            return $next($request);
        });
        
    }
    public function showShoppingCart(){
        $receipt = !$this->receipt ? null : (count($this->receipt['items'])==0? null : $this->receipt);
        return view('content.checkout',compact('receipt'));
    }
    public function manageItem(Request $request){
        switch($request->input('action')){
            case 'remove':
                $targetItem = ReceiptDetail::where('receipt_id',$request->receipt_id)
                ->where('item_id',$request->item_id)
                ->first();

                $this->receipt
                ->update(
                    ['totalPrice'=>DB::raw(
                        'totalPrice-'.$this->receipt['items']
                        [$request->item_location]['price']*                        
                        $targetItem['quantity'])],
                    ['totalQuantity'=>DB::raw(
                        'totalQuantity-'.$targetItem['quantity'])]
                    );
                    
                $targetItem->delete();

                return redirect()->back()->with('message', '$request->id');
                break;
            case 'edit':

                break;

        }
    }
    public function purchase(Request $request){
        $this->receipt['purchased']=1;
        $this->receipt->save();
        return redirect('/history');
        // return response()->json(['message'=> $this->receipt['purchased']],200);
    }
}
