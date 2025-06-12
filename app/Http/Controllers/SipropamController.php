<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SipropamController extends Controller
{
    // Metode untuk menangani permintaan ke /tupoksi/sipropam
    public function sipropam()
    {
        // Data untuk view
        $data = [
            'title' => 'Tupoksi SIPROPAM',
            'description' => 'Ini adalah halaman yang menjelaskan tugas sipropam.'
        ];

        // Mengirim data ke view tupoksi.sipropam
        return view('tupoksi.sipropam', compact('data'));
    }
}
