@extends('layouts.app')

@section('title', 'Tambah Pegawai')

@section('content_header')
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-file-plus"></i> <span class="text-semibold">Tambah Pegawai</span></h4>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="{{ route('pegawai.index') }}">Data Pegawai/a></li>
                <li class="active">Tambah Pegawai</li>
            </ul>
        </div>
    </div>
@endsection

@section('content')
    <div class="col-lg-12">
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">Tambah Pegawai</h5>
            </div>

            <div class="panel-body">
                <form action="{{ route('pegawai.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Id Pegawai:</label>
                        <input type="text" name="id_pegawai" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Nama Pegawai:</label>
                        <input type="text" name="nama_pegawai" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>No Hp:</label>
                        <input type="text" name="no_hp" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Alamat:</label>
                        <input type="text" name="alamat" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Posisi:</label>
                        <input type="text" name="posisi" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Foto:</label>
                        <input type="file" name="foto" class="form-control">
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
