<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SattahtiController extends Controller
{
    public function sattahti()
    {
        return view('tupoksi.sattahti');  // Pastikan nama view sesuai dengan nama file view
    }
}
