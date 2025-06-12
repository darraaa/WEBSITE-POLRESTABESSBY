<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SatresnarkobaController extends Controller
{
    // Metode untuk menangani permintaan ke /tupoksi/satresnarkoba
    public function satresnarkoba()
    {
        // Data untuk view
        $data = [
            'title' => 'Tupoksi SATRESNARKOBA',
            'description' => 'Ini adalah halaman yang menjelaskan tugas satresnarkoba.'
        ];

        // Mengirim data ke view tupoksi.satresnarkoba
        return view('tupoksi.satresnarkoba', compact('data'));
    }
}
