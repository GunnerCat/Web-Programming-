<?php

namespace App\Http\Controllers;

use App\Models\receipt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistoryPageController extends Controller
{
    public function ShowHistoryPage(){
        $receipts = receipt::where('user_id',Auth::user()['id'])
        ->where('purchased',true)
        ->with('items')
        ->get();
        return view('content.history',compact('receipts')) ;
    }
    
}
