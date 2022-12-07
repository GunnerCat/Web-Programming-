<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function ShowCategory($id){
        $category = Category::find($id);
        $items = $category->items()->get();
        return view ('content.category',compact('items','category'));
    }
}
