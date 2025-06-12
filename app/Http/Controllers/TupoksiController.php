<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TupoksiController extends Controller
{
    public function index()
    {
        return view('tupoksi'); // Mengarahkan ke tupoksi.blade.php
    }
}
