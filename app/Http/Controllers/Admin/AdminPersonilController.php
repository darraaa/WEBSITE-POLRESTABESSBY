<?php

namespace App\Http\Controllers\Admin;

use App\Models\Personil;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminPersonilController extends Controller
{
    /**
     * Display a listing of the personil.
     */
    public function index()
    {
        // Mengambil semua data personil dari database
        $personils = Personil::all();
        
        // Mengirim data ke view 'admin.personil.index'
        return view('admin.personil', compact('personils'));
    }

    /**
     * Show the form for creating a new personil.
     */
    public function create()
    {
        // Menampilkan form untuk menambah personil baru
        return view('admin.personil.create');
    }

    /**
     * Store a newly created personil in the database.
     */
    public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            'name' => 'required|string|max:255',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable|string',
        ]);

        // Meng-upload foto dan menyimpan data personil
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('images/personil', 'public');
            Personil::create([
                'name' => $request->name,
                'photo' => $photoPath,
                'description' => $request->description,
            ]);
        }

        // Redirect ke halaman daftar personil dengan pesan sukses
        return redirect()->route('admin.personil.index')->with('success', 'Personil berhasil ditambahkan.');
    }
}
