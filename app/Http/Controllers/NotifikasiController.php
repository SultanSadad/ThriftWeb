<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotifikasiController extends Controller
{
    public function showNotification()
    {
        return view('notifikasi');
    }
}
