<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function Search(){
        $query = $_GET['query'];
        $product = item::where('name','LIKE','%'.$query.'%')->get();
        return view('content.result',compact('product'));
    }
}
