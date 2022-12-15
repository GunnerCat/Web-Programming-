<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\ReceiptDetail;
use Illuminate\Http\Request;

class ProductManagementController extends Controller
{
    public function ShowProductManageMenu(){
        $items=Item::paginate(10);
        return view('content.ProductManagement',compact('items'));
    }
    public function SearchItem(){
        $query = $_GET['query'];
        $items = item::where('name','LIKE','%'.$query.'%')->paginate(10);
        return view('content.productManagementSearchResult',compact('items'));
    }
    public function removeProduct(Request $request){
        ReceiptDetail::where('item_id',$request->item_id)->delete();
        Item::destroy('id',$request->item_id);
        return redirect()->back()->with('message', '$request->id');

    }
    public function ShowEditPage($id){
        return view('content.editProduct',['id'=>$id]);

    }
    public function ShowAddProductPage(){
        return view ('content.AddProduct');
    }
}
