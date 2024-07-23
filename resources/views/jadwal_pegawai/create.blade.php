@extends('layouts.app')

@section('title', 'Tambah Jadwal Pegawai')

@section('content_header')
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-file-plus"></i> <span class="text-semibold">Tambah Jadwal Pegawai</span></h4>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="{{ route('jadwal_pegawai.index') }}">Data Jadwal Pegawai</li>
                <li class="active">Tambah Jadwal Pegawai</li>
            </ul>
        </div>
    </div>
@endsection

@section('content')
    <div class="col-lg-12">
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">Tambah Jadwal pegawai</h5>
            </div>

            <div class="panel-body">
                <form action="{{ route('jadwal_pegawai.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Id Jadwal Pegawai:</label>
                        <input type="text" name="id_jadwal_pegawai" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Id Pegawai:</label>
                        <input type="text" name="id_pegawai" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Nama Pegawai:</label>
                        <input type="text" name="nama_pegawai" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Id Shift:</label>
                        <input type="text" name="id_shift" class="form-control" required>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
