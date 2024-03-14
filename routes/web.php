<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListBarangController; // Perhatikan penggunaan huruf besar pada kata 'Use' yang diubah menjadi 'use'
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ListSepatuController;
use App\Http\Controllers\List_barangController;

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

Route::get('/login',[LoginController::class,'tampilkan']);

Route::get('/images118', function() {
    return view('images118');
});

Route::get('/listsepatu', function() {
    return view('listsepatu');
});

Route::get('/list_barang',[ListBarangController::class,'tampilkan']);





