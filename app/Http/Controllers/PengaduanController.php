<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    public function index()
    {
        return view('chat'); // Mengarahkan ke chat.blade.php, yang berisi halaman Pengaduan
    }
}
