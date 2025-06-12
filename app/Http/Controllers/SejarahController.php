<?php

namespace App\Http\Controllers;  // Tanpa 'Admin'

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SejarahController extends Controller
{
    public function index()
    {
        return view('sejarah'); // Pastikan file view 'sejarah.blade.php' ada di resources/views
    }
}
