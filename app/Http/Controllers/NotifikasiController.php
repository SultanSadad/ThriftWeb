<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotifikasiController extends Controller
{
    public function getDataNotifikasi()
    {
        //Logika untuk mendapatkan array data notifikasi
        $dataNotifikasi = [
            ['id' => 1, 'pesan' => 'Diskon Sepatu thrift 30%.'],
            ['id' => 2, 'pesan' => 'Diskon untukmu saat ingin membeli sepatu merek ini.'],
            ['id' => 3, 'pesan' => 'Sepatu Spesial stok terbatas jangan sampai ketinggalan.'],
            ['id' => 4, 'pesan' => 'Stok Sepatu Ini hampir habis jangan sampai ketinggalan.'],
            ['id' => 5, 'pesan' => 'Promo Sepatu terbaik beli 2 pasang gratis 1 pasang.'],
        ];

        return $dataNotifikasi;
    }

    public function tampilkan()
    {
        $data = $this->getDataNotifikasi();
        return view('notifikasi', compact('data'));
    }
}
