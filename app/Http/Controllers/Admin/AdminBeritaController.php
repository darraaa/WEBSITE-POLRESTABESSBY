<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;

class AdminBeritaController extends Controller
{
    // Method to display the form
    public function index()
    {
        return view('admin.berita');
    }

    // Method to handle form submission
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);
    
        // Proses upload gambar
        $imagePath = $request->file('gambar')->store('public/images');
    
        // Simpan berita baru dengan tanggal upload saat ini
        Berita::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => basename($imagePath),
            'tanggal_upload' => now(), // Menyimpan waktu sekarang saat berita dibuat
        ]);
    
        // Redirect dengan pesan sukses
        return redirect()->route('berita.index')->with('success', 'Berita berhasil ditambahkan');
    }
    
}
