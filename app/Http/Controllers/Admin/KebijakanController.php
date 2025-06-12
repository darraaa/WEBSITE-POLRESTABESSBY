<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kebijakan;

class KebijakanController extends Controller
{
    public function index()
    {
        $kebijakans = Kebijakan::all();
        return view('admin.profile.kebijakan.index', compact('kebijakans'));
    }

    public function create()
    {
        return view('admin.profile.kebijakan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
        ]);

        Kebijakan::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
        ]);

        return redirect()->route('profile.kebijakan-pimpinan.index')->with('success', 'Data kebijakan berhasil disimpan.');
    }

    public function edit($id)
    {
        $kebijakan = Kebijakan::findOrFail($id);
        return view('admin.profile.kebijakan.edit', compact('kebijakan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
        ]);

        $kebijakan = Kebijakan::findOrFail($id);
        $kebijakan->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
        ]);

        return redirect()->route('profile.kebijakan-pimpinan.index')->with('success', 'Data kebijakan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $kebijakan = Kebijakan::findOrFail($id);
        $kebijakan->delete();

        return redirect()->route('profile.kebijakan-pimpinan.index')->with('success', 'Data kebijakan berhasil dihapus.');
    }

    public function show($id)
    {
        $kebijakan = Kebijakan::findOrFail($id);
        return view('admin.profile.kebijakan.show', compact('kebijakan'));
    }
}
