<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiwasController extends Controller
{
    // Metode untuk menangani permintaan ke /tupoksi/siwas
    public function siwas()
    {
        // Data untuk view
        $data = [
            'title' => 'Tupoksi SIWAS',
            'description' => 'Ini adalah halaman yang menjelaskan tugas siwas.'
        ];

        // Mengirim data ke view tupoksi.siwas
        return view('tupoksi.siwas', compact('data'));
    }
}
