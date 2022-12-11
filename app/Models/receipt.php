<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class receipt extends Model
{
    protected $hidden=['created_at','updated_at'];
    protected $fillable=['totalPrice'];

    use HasFactory;
    public function items(){
        return $this->belongsToMany(Item::class,'receipt_details','receipt_id','item_id')->withPivot('quantity');
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
