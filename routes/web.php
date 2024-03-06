<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListBarangController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

// Hapus baris yang duplikat
// use App\Http\Controllers\ListBarangController;

Route::get('/ListBarang', [ListBarangController::class, 'tampilkan'])->name('ListBarang');

Route::get('/dashboard', [DashboardController::class, 'tampilkan'])->name('Dashboard');
