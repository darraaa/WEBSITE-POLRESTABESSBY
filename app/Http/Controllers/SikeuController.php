<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SikeuController extends Controller
{
    // Metode untuk menangani permintaan ke /tupoksi/sikeu
    public function sikeu()
    {
        // Data untuk view
        $data = [
            'title' => 'Tupoksi SIKEU',
            'description' => 'Ini adalah halaman yang menjelaskan tugas sikeu.'
        ];

        // Mengirim data ke view tupoksi.sikeu
        return view('tupoksi.sikeu', compact('data'));
    }
}
