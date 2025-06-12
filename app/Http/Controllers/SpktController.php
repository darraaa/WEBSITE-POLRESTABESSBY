<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpktController extends Controller
{
    // Metode untuk menangani permintaan ke /tupoksi/spkt
    public function spkt()
    {
        // Data untuk view
        $data = [
            'title' => 'Tupoksi SPKT',
            'description' => 'Ini adalah halaman yang menjelaskan tugas spkt.'
        ];

        // Mengirim data ke view tupoksi.spkt
        return view('tupoksi.spkt', compact('data'));
    }
}
