<?php

namespace App\Http\Controllers;

use App\Models\jadwal_pegawai;
use App\Models\Obat;
use App\Models\pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PelangganController extends Controller
{
    public function index()
    {
        $pelanggan = Pelanggan::all();
        return view('pelanggan.index', compact('pelanggan'));
    }

    public function create()
    {
        return view('pelanggan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_pelanggan' => 'required',
            'nama' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
           
        ]);
        $data = $request->all();

        Pelanggan::create($data);
        return redirect()->route('pelanggan.index')->with('success', 'Pelanggan berhasil ditambahkan.');
    }

    public function edit(Pelanggan $pelanggan)
    {
        return view('pelanggan.edit', compact('pelanggan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_pelanggan' => 'required',
            'nama' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
           
        ]);

        $pelanggan = Pelanggan::findOrFail($id);
        $data = $request->all();

        $pelanggan->update($data);
        return redirect()->route('pelanggan.index')->with('success', 'Pelanggan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);

        $pelanggan->delete();

        return redirect()->route('pelanggan.index')->with('success', 'Pelanggan berhasil dihapus.');
    }
}
