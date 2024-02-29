<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; // Perhatikan penggunaan huruf besar pada kata 'Use' yang diubah menjadi 'use'
use App\Http\Controllers\ListBarangController;
use App\Http\Controllers\NotifikasiController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/welcome', function (){
    return view('welcome');
});
Route::get('/user/{id}', function (int $id) {
    return "User dengan ID " . $id;
});
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return 'admin dashboard';
    });

    Route::get('/users', function () {
        return 'admin users';
    });
});
Route::get('/listbarang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);

Route::get('/notification', [NotifikasiController::class, 'showNotification']);
