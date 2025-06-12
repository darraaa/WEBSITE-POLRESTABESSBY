<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SatreskrimController extends Controller
{
    // Method to handle requests to /tupoksi/satreskrim
    public function satreskrim()
    {
        // Data for the view
        $title = 'Tupoksi SATRESKRIM';
        $description = 'Ini adalah halaman yang menjelaskan tugas satreskrim.';

        // Send data to the view tupoksi.satreskrim
        return view('tupoksi.satreskrim', compact('title', 'description'));
    }
}
