<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $hidden=['created_at','updated_at'];
    protected $guarded=[];
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function receipts(){
        return $this->belongsToMany(receipt::class,'receipt_detail','item_id','receipt_id');
    }
}
