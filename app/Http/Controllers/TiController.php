<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TiController extends Controller
{
    // Metode untuk menangani permintaan ke /tupoksi/ti
    public function ti()
    {
        // Data untuk view
        $data = [
            'title' => 'Tupoksi TI',
            'description' => 'Ini adalah halaman yang menjelaskan tugas ti.'
        ];

        // Mengirim data ke view tupoksi.ti
        return view('tupoksi.ti', compact('data'));
    }
}
