<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BagsumdaController extends Controller
{
    // Metode untuk menangani permintaan ke /tupoksi/bagsumda
    public function bagsumda()
    {
        // Data untuk view
        $data = [
            'title' => 'Tupoksi BAGSUMDA',
            'description' => 'Ini adalah halaman yang menjelaskan tugas bagsumda.'
        ];

        // Mengirim data ke view tupoksi.bagsumda
        return view('tupoksi.bagsumda', compact('data'));
    }
}
