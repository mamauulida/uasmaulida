<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ObatController extends Controller
{
    public function index()
    {
        $obat = Obat::all();
        return view('obat.index', compact('obat'));
    }

    public function create()
    {
        return view('obat.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_obat' => 'required',
            'nama_obat' => 'required',
            'jenis_obat' => 'required',
            'supplier' => 'required',
            'stok' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $data = $request->all();

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/foto', $fileName);
            $data['foto'] = $fileName;
        }
        Obat::create($data);

        return redirect()->route('obat.index')->with('success', 'Obat berhasil ditambahkan.');
    }

    public function edit(Obat $obat)
    {
        return view('obat.edit', compact('obat'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_obat' => 'required',
            'nama_obat' => 'required',
            'jenis_obat' => 'required',
            'supplier' => 'required',
            'stok' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $obat = Obat::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/foto', $fileName);

            if ($obat->foto) {
                Storage::delete('public/foto/' . $obat->foto);
            }

            $data['foto'] = $fileName;
        }

        $obat->update($data);

        return redirect()->route('obat.index')->with('success', 'Obat berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $obat = Obat::findOrFail($id);

        if ($obat->foto) {
            Storage::delete('public/foto/' . $obat->foto);
        }

        $obat->delete();

        return redirect()->route('obat.index')->with('success', 'Obat berhasil dihapus.');
    }
}
