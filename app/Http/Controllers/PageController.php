<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('home'); // Halaman home dengan navbar
    }

    public function about()
    {
        return view('about'); // Halaman about dengan navbar
    }
}
