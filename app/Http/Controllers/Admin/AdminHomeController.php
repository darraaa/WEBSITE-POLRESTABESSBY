<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminHomeController extends Controller
{
    public function index()
    {
        return view('admin.home');
    }

    public function update(Request $request)
    {
        $request->validate([
            'banner' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'news_title' => 'required|string|max:255',
            'news_content' => 'required|string',
            'news_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Mengganti banner
        if ($request->hasFile('banner')) {
            $bannerPath = $request->file('banner')->store('banners', 'public');
        }

        // Mengganti gambar berita
        if ($request->hasFile('news_image')) {
            $newsImagePath = $request->file('news_image')->store('news_images', 'public');
        }

        // Di sini Anda dapat menyimpan data berita ke database sesuai kebutuhan Anda.

        return back()->with('success', 'Perubahan telah disimpan!');
    }
}
