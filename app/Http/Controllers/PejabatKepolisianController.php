<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PejabatKepolisianController extends Controller
{
    public function index()
    {
        return view('pejabat-kepolisian');
    }
}
