<?php

namespace App\Http\Controllers;

use App\Models\jadwal_pegawai;
use App\Models\Obat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Jadwal_PegawaiController extends Controller
{
    public function index()
    {
        $jadwal_pegawai = jadwal_pegawai::all();
        return view('jadwal_pegawai.index', compact('jadwal_pegawai'));
    }

    public function create()
    {
        return view('jadwal_pegawai.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_jadwal_pegawai' => 'required',
            'id_pegawai' => 'required',
            'nama_pegawai' => 'required',
            'id_shift' => 'required',
           
        ]);
        $data = $request->all();

        jadwal_pegawai::create($data);
        return redirect()->route('jadwal_pegawai.index')->with('success', 'Jadwal_Pegawai berhasil ditambahkan.');
    }

    public function edit(Jadwal_Pegawai $jadwal_pegawai)
    {
        return view('jadwal_pegawai.edit', compact('jadwal_pegawai'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_jadwal_pegawai' => 'required',
            'id_pegawai' => 'required',
            'nama_pegawai' => 'required',
            'id_shift' => 'required',
           
        ]);

        $jadwal_pegawai = Jadwal_Pegawai::findOrFail($id);
        $data = $request->all();

        $jadwal_pegawai->update($data);
        return redirect()->route('jadwal_pegawai.index')->with('success', 'Jadwal_Pegawai berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $jadwal_pegawai = Jadwal_Pegawai::findOrFail($id);

        $jadwal_pegawai->delete();

        return redirect()->route('jadwal_pegawai.index')->with('success', 'Jadwal_Pegawai berhasil dihapus.');
    }
}
