<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class TupoksiController extends Controller
{
    public function showForm()
    {
        // Mengambil data Tupoksi dari session atau database (sesuai kebutuhan)
        return view('admin.tupoksi');
    }

    public function update(Request $request)
    {
        // Validasi form
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        // Menyimpan data judul dan deskripsi di session (bisa diganti ke database jika diperlukan)
        Session::put('judul', $request->input('judul'));
        Session::put('deskripsi', $request->input('deskripsi'));

        // Jika ada gambar yang diunggah
        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('public/images');
            Session::put('gambar', basename($path)); // Simpan nama file gambar
        }

        // Redirect kembali dengan pesan sukses
        return redirect()->route('admin.tupoksi.edit')->with('success', 'Tupoksi berhasil diperbarui!');
    }
}
