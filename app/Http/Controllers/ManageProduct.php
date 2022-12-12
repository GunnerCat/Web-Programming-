<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ManageProduct extends Controller
{
    public function AddProduct(Request $request){
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'detail' => 'required',
            'price' => 'required|integer',
            'photo' => 'mimes:jpg,jpeg,png|required',
        ]);
        // picks a file named photo from blade
        $photo= $request->file('photo');
        //changes the item name to time soo there would be a chance of 2 of the same images
        $imageName = time().'.'.$photo->getClientOriginalExtension();
        //it picks the uploaded file and set it with the name of imageName, and then put it inside public/images/
        Storage::putFileAs('public/images/',$photo,$imageName);
        //put a directory behind the image name so the DB could figure out the actualy dir
        $imageName = 'images/'.$imageName;

        DB::table('items')->insert([
            'name' => $request['name'],
            'category_id' => $request['category'],
            'detail' => $request['detail'],
            'price' => $request['price'],
            'photo' => $imageName,
        ]);
        return redirect('/product_management');
    }

    public function editProduct(Request $request){

        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'detail' => 'required',
            'price' => 'required|integer',
            'photo' => 'mimes:jpg,jpeg,png|required',
        ]);
        
        $oldItem= Item::find($request->item_id);
        // picks a file named photo from blade
        $photo= $request->file('photo');
        //changes the item name to time soo there would be a chance of 2 of the same images
        $imageName = time().'.'.$photo->getClientOriginalExtension();
        //it picks the uploaded file and set it with the name of imageName, and then put it inside public/images/

        Storage::delete('public/'.$oldItem->photo);
        Storage::putFileAs('public/images/',$photo,$imageName);
        //put a directory behind the image name so the DB could figure out the actualy dir
        $imageName = 'images/'.$imageName;

        $oldItem->update([
            'name' => $request['name'],
            'category_id' => $request['category'],
            'detail' => $request['detail'],
            'price' => $request['price'],
            'photo' => $imageName,
        ]);
        
        return redirect('/product_management');
    }

    
}
