<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KapolresController extends Controller
{
    // Metode untuk menangani permintaan ke /tupoksi/kapolres
    public function kapolres()
    {
        // Data untuk view
        $data = [
            'title' => 'Tupoksi KAPOLRES',
            'description' => 'Ini adalah halaman yang menjelaskan tugas KAPOLRES.'
        ];

        // Mengirim data ke view tupoksi.kapolres
        return view('tupoksi.kapolres', compact('data'));
    }
}
