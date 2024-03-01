<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
        return view('home');
=======
        $data = [
            'nama' => 'doraemon',
            'pekerjaan' => 'Developer',
        ];
        return view ('home')->with($data);
>>>>>>> origin/main
    }

    public function contact()
    {
<<<<<<< HEAD
        return view('contact');
=======
        return view ('contact');
>>>>>>> origin/main
    }
}
