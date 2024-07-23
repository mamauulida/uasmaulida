@extends('layouts.app')

@section('title', 'Tambah Pelanggan')

@section('content_header')
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-file-plus"></i> <span class="text-semibold">Tambah Pelanggan</span></h4>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="{{ route('pelanggan.index') }}">Data Pelanggan/a></li>
                <li class="active">Tambah Pelanggan</li>
            </ul>
        </div>
    </div>
@endsection

@section('content')
    <div class="col-lg-12">
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">Tambah Pelanggan</h5>
            </div>

            <div class="panel-body">
                <form action="{{ route('pelanggan.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Id Pelanggan:</label>
                        <input type="text" name="id_pelanggan" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Nama:</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>No Hp:</label>
                        <input type="text" name="no_hp" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Alamat:</label>
                        <input type="text" name="alamat" class="form-control" required>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
