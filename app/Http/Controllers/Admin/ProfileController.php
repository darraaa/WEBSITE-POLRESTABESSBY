<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $items = Profile::all();
        return view('admin.profile.index', compact('items'));
    }

    public function create()
    {
        return view('admin.profile.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kategori' => 'required|string|max:255',
            'isi' => 'required|string',
        ]);

        Profile::create($request->only(['kategori', 'isi']));

        return redirect()->route('admin.profile.index')->with('success', 'Data berhasil disimpan.');
    }

    public function edit($id)
    {
        $item = Profile::findOrFail($id);
        return view('admin.profile.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = Profile::findOrFail($id);

        $request->validate([
            'kategori' => 'required|string|max:255',
            'isi' => 'required|string',
        ]);

        $item->update($request->only(['kategori', 'isi']));

        return redirect()->route('admin.profile.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        Profile::destroy($id);
        return redirect()->route('admin.profile.index')->with('success', 'Data berhasil dihapus.');
    }
}
