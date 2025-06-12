<?php

// app/Http/Controllers/BeritaController.php

// app/Http/Controllers/BeritaController.php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    // Menampilkan form untuk input berita
    public function create()
    {
        return view('admin.berita'); // Menampilkan form input berita
    }

    // Menyimpan berita ke database
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'tanggal_upload' => 'required|date',
        ]);

        // Menangani file gambar
        $gambarPath = null;
        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('gambar_berita', 'public');
        }

        // Menyimpan berita ke database
        Berita::create([
            'judul' => $validatedData['judul'],
            'deskripsi' => $validatedData['deskripsi'],
            'gambar' => $gambarPath,
            'tanggal_upload' => $validatedData['tanggal_upload'],
        ]);

        return redirect()->route('berita.index')->with('success', 'Berita berhasil ditambahkan!');
    }

    // Menampilkan berita yang sudah ada
    public function index()
    {
        // Ambil berita yang diurutkan berdasarkan tanggal upload dari yang terbaru
        $berita = Berita::orderBy('tanggal_upload', 'desc')->get();
        return view('berita', compact('berita'));
    }
    
    
}
