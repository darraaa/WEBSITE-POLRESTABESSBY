<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BagopsController extends Controller
{
    // Metode untuk menangani permintaan ke /tupoksi/bagops
    public function bagops()
    {
        // Data untuk view
        $data = [
            'title' => 'Tupoksi BAGOPS',
            'description' => 'Ini adalah halaman yang menjelaskan tugas bagops.'
        ];

        // Mengirim data ke view tupoksi.bagops
        return view('tupoksi.bagops', compact('data'));
    }
}
