<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListSepatuController extends Controller
{
    
    public function getData()
    {
        // Logika untuk mendapatkan array data
        $datasepatu = [
            ['id' => 1, 'nama' => 'sepatu pansus', 'harga' => 15000],
            ['id' => 2, 'nama' => 'sepatu hils', 'harga' => 20000],
            ['id' => 3, 'nama' => 'sepatu snekers', 'harga' => 13500],
            ['id' => 4, 'nama' => 'sepatu both', 'harga' => 3200],
            ['id' => 5, 'nama' => 'sepatu jordan', 'harga' => 14000],
        ];

        return $datasepatu;

    }

    public function tampilkan(){
        $data = $this->getData();
        return view('ListSepatu', compact('data'));
    }
    
}
