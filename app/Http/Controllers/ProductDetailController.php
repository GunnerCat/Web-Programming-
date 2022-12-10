<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    public function ShowProductDetail($id){
        $item = Item::find($id);

        return view('content.productDetail',compact('item'));
    }
    
}
