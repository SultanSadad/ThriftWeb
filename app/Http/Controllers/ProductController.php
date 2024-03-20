<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Contoh data
        $data = [
            ['id' => 1, 'produk' => 'Produk 1'],
            ['id' => 2, 'produk' => 'Produk 2'],
            ['id' => 3, 'produk' => 'Produk 3'],
        ];

        return view('list_product', compact('data'));
    }
}
