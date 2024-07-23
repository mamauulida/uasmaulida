@extends('layouts.app')

@section('title', 'Tambah Transaksi')

@section('content_header')
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-file-plus"></i> <span class="text-semibold">Tambah Transaksi</span></h4>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="{{ route('transaksi.index') }}">Data Transaksi/a></li>
                <li class="active">Tambah Transaksi</li>
            </ul>
        </div>
    </div>
@endsection

@section('content')
    <div class="col-lg-12">
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">Tambah Transaksi</h5>
            </div>

            <div class="panel-body">
                <form action="{{ route('transaksi.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Id Transaksi:</label>
                        <input type="text" name="id_transaksi" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Detail Transaksi:</label>
                        <input type="text" name="detail_transaksi" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Tanggal:</label>
                        <input type="date" name="tanggal" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Total Transaksi:</label>
                        <input type="text" name="total_transaksi" class="form-control" required>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
