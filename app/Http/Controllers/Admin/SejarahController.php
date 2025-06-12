<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sejarah;
use Illuminate\Http\Request;

class SejarahController extends Controller
{
    public function index()
    {
        $items = Sejarah::all();
        return view('admin.sejarah.index', compact('items'));
    }

    public function create()
    {
        return view('admin.sejarah.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
        ]);

        Sejarah::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
        ]);

        return redirect()->route('admin.sejarah-singkat.index')->with('success', 'Data berhasil disimpan.');
    }

    public function edit($id)
    {
        $item = Sejarah::findOrFail($id);
        return view('admin.sejarah.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
        ]);

        $item = Sejarah::findOrFail($id);
        $item->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
        ]);

        return redirect()->route('admin.sejarah-singkat.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $item = Sejarah::findOrFail($id);
        $item->delete();

        return redirect()->route('admin.sejarah-singkat.index')->with('success', 'Data berhasil dihapus.');
    }
}
