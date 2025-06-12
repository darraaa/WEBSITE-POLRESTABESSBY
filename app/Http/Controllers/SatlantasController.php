<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SatlantasController extends Controller
{
    // Metode untuk menangani permintaan ke /tupoksi/satlantas
    public function satlantas()
    {
        // Data untuk view
        $data = [
            'title' => 'Tupoksi SATLANTAS',
            'description' => 'Ini adalah halaman yang menjelaskan tugas satlantas.'
        ];

        // Mengirim data ke view tupoksi.satlantas
        return view('tupoksi.satlantas', compact('data'));
    }
}
