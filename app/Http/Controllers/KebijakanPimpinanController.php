<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KebijakanPimpinanController extends Controller
{
    public function index()
    {
        return view('kebijakan-pimpinan');
    }
}
