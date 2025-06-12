<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PolsekController extends Controller
{
    public function index()
    {
        return view ('polsek');
    }
    public function showByWilayah($wilayah)
{
    // Validasi wilayah
    $validWilayah = ['surabaya-barat', 'surabaya-timur', 'surabaya-selatan','surabaya-utara','surabaya-pusat']; // Daftar wilayah yang valid
    if (!in_array($wilayah, $validWilayah)) {
        abort(404, 'Wilayah tidak ditemukan');
    }

    // Render view dengan parameter wilayah
    return view('polsek', ['wilayah' => $wilayah]);
}
   
}
