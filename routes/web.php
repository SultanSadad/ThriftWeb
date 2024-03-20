<?php

use App\Http\Controllers\ListProductController; // Fixed spelling here
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListBarangController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StyleController; // Added import for StyleController
use App\Http\Controllers\LoginController; // Added import for LoginController
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('welcome');
});

// Removed duplicated line
// use App\Http\Controllers\ListBarangController;

Route::get('/ListBarang', [ListBarangController::class, 'tampilkan'])->name('ListBarang');

Route::get('/dashboard', [DashboardController::class, 'tampilkan'])->name('Dashboard');

Route::get('/style', [StyleController::class, 'tampilkan'])->name('Style');

Route::get('/Login', [LoginController::class, 'tampilkan'])->name('Login');

Route::get('/Register', [RegisterController::class, 'tampilkan'])->name('Register');

