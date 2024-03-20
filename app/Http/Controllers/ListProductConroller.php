<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListProductConroller extends Controller
{
    public function tampilkan(){
        return view('list_product');
    }
}
