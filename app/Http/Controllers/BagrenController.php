<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BagrenController extends Controller
{
    // Metode untuk menangani permintaan ke /tupoksi/bagren
    public function bagren()
    {
        // Data untuk view
        $data = [
            'title' => 'Tupoksi BAGREN',
            'description' => 'Ini adalah halaman yang menjelaskan tugas bagren.'
        ];

        // Mengirim data ke view tupoksi.bagren
        return view('tupoksi.bagren', compact('data'));
    }
}
