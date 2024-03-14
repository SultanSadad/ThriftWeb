<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        //Validasi input email dan password
        $credentials = $request ->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        //cek apakah email dan password valid
        if (Auth::attemp($credentials)) {
            //Regenerate session
            $requst->session()->regenerate();
        }

        //Redirect ke halaman home
        return redirect()->intended('/home');

        //kembali ke halaman login dengan pesan erroe
        return back()->withErros([
            'email'=>'Email atau password tidak valid.',
        ]);
    }
}