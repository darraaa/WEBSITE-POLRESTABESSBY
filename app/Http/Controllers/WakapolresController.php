<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WakapolresController extends Controller
{
    // Metode untuk menangani permintaan ke /tupoksi/wakapolres
    public function wakapolres()
    {
        // Data untuk view
        $data = [
            'title' => 'Tupoksi WAKAPOLRES',
            'description' => 'Ini adalah halaman yang menjelaskan tugas WAKAPOLRES.'
        ];

        // Mengirim data ke view tupoksi.wakapolres
        return view('tupoksi.wakapolres', compact('data'));
    }
}
