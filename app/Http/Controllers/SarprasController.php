<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SarprasController extends Controller
{
    // Metode untuk menangani permintaan ke /tupoksi/sarpras
    public function sarpras()
    {
        // Data untuk view
        $data = [
            'title' => 'Tupoksi SARPRAS',
            'description' => 'Ini adalah halaman yang menjelaskan tugas sarpras.'
        ];

        // Mengirim data ke view tupoksi.sarpras
        return view('tupoksi.sarpras', compact('data'));
    }
}
