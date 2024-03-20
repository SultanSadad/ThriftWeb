<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StyleController extends Controller
{
    public function tampilkan(){
        return view('style');
    }
}
