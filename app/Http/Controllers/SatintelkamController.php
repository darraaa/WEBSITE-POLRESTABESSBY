<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SatintelkamController extends Controller
{
    // Metode untuk menangani permintaan ke /tupoksi/satintelkam
    public function satintelkam()
    {
        // Data untuk view
        $data = [
            'title' => 'Tupoksi SATINTELKAM',
            'description' => 'Ini adalah halaman yang menjelaskan tugas satintelkam.'
        ];

        // Mengirim data ke view tupoksi.satintelkam
        return view('tupoksi.satintelkam', compact('data'));
    }
}
