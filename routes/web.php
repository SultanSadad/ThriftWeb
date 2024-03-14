<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController; // Perhatikan penggunaan huruf besar pada kata 'Use' yang diubah menjadi 'use'

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/login', 
    [LoginController::class, 'FormLogin']
         )->name('login.form');

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/user/{id}', function ($id) {
    return 'User dengan ID ' . $id;
});