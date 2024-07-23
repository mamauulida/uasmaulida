<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawai = Pegawai::all();
        return view('pegawai.index', compact('pegawai'));
    }

    public function create()
    {
        return view('pegawai.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_pegawai' => 'required',
            'nama_pegawai' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
            'posisi' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $data = $request->all();

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/foto', $fileName);
            $data['foto'] = $fileName;
        }
        Pegawai::create($data);

        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil ditambahkan.');
    }

    public function edit(Pegawai $pegawai)
    {
        return view('pegawai.edit', compact('pegawai'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_pegawai' => 'required',
            'nama_pegawai' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
            'posisi' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $pegawai = Pegawai::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/foto', $fileName);

            if ($pegawai->foto) {
                Storage::delete('public/foto/' . $pegawai->foto);
            }

            $data['foto'] = $fileName;
        }

        $pegawai->update($data);

        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $pegawai = Pegawai::findOrFail($id);

        if ($pegawai->foto) {
            Storage::delete('public/foto/' . $pegawai->foto);
        }

        $pegawai->delete();

        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil dihapus.');
    }
}
