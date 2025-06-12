<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SatsabharaController extends Controller
{
    // Metode untuk menangani permintaan ke /tupoksi/satsabhara
    public function satsabhara()
    {
        // Data untuk view
        $data = [
            'title' => 'Tupoksi SATSABHARA',
            'description' => 'Ini adalah halaman yang menjelaskan tugas satsabhara.'
        ];

        // Mengirim data ke view tupoksi.satsabhara
        return view('tupoksi.satsabhara', compact('data'));
    }
}
