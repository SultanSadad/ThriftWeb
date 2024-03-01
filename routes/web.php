<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListBarangController;
use App\Http\Controllers\DashboardController;
=======
use App\Http\Controllers\HomeController; // Perhatikan penggunaan huruf besar pada kata 'Use' yang diubah menjadi 'use'
>>>>>>> origin/main


Route::get('/', [HomeController::class, 'index']);
<<<<<<< HEAD
Route::get('/getcontact', [HomeController::class, 'contact']);

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/user/{id}', function ($id) {
    return 'User dengan Id ' . $id;
});

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return 'Admin Dashboard';
    });

    Route::get('/users', function () {
        return 'Admin Users';
    });
});

Route::get('/listbarang/{id}/{nama}',[ListBarangController::class, 'tampilkan']);





Route::get('/dashboard',[DashboardController::class, 'index']);
=======
Route::get('/contact', [HomeController::class, 'contact']);
>>>>>>> origin/main
