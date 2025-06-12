<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SatbinmasController extends Controller
{
    // Metode untuk menangani permintaan ke /tupoksi/satbinmas
    public function satbinmas()
    {
        // Data untuk view
        $data = [
            'title' => 'Tupoksi SATBINMAS',
            'description' => 'Ini adalah halaman yang menjelaskan tugas satbinmas.'
        ];

        // Mengirim data ke view tupoksi.satbinmas
        return view('tupoksi.satbinmas', compact('data'));
    }
}
