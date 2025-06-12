<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pejabat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PejabatController extends Controller
{
    public function index()
    {
        $pejabats = Pejabat::all();
        return view('admin.profile.pejabat.index', compact('pejabats'));
    }

    public function create()
    {
        return view('admin.profile.pejabat.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'foto' => 'nullable|image|max:2048',
        ]);

        $data = $request->only('nama', 'jabatan');

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('pejabat', 'public');
        }

        Pejabat::create($data);

        return redirect()->route('pejabat-kepolisian-index')->with('success', 'Pejabat berhasil ditambahkan.');

        Pejabat::create($data);

        return redirect()->route('admin.profile.pejabat.index')->with('success', 'Pejabat berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $pejabat = Pejabat::findOrFail($id);
        return view('admin.profile.pejabat.edit', compact('pejabat'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $pejabat = Pejabat::findOrFail($id);

        $data = $request->only('nama', 'jabatan');

        if ($request->hasFile('foto')) {
            // Hapus foto lama kalau ada
            if ($pejabat->foto && Storage::disk('public')->exists($pejabat->foto)) {
                Storage::disk('public')->delete($pejabat->foto);
            }


            $data['foto'] = $request->file('foto')->store('pejabat', 'public');
        }

        $pejabat->update($data);

        return redirect()->route('admin.profile.pejabat.index')->with('success', 'Pejabat berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $pejabat = Pejabat::findOrFail($id);

        if ($pejabat->foto) {
            Storage::disk('public')->delete($pejabat->foto);
        }

        $pejabat->delete();

        return redirect()->route('admin.profile.pejabat.index')->with('success', 'Pejabat berhasil dihapus.');
    }
}
