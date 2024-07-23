@extends('layouts.app')

@section('title', 'Edit Obat')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item"><a href="{{ route('obat.index') }}">Data Obat</a></li>
    <li class="breadcrumb-item active">Edit</li>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <form action="{{ route('obat.update', $obat->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="id_obat">Id Obat</label>
                        <input type="text" name="id_obat" class="form-control" id="id_obat" value="{{ $obat->id_obat }}" required>
                        @if($errors->has('id_obat'))
                            <div class="text-danger">
                                {{ $errors->first('id_obat') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="nama_obat">Nama Obat</label>
                        <input type="text" name="nama_obat" class="form-control" id="nama_obat" value="{{ $obat->nama_obat }}" required>
                        @if($errors->has('nama_obat'))
                            <div class="text-danger">
                                {{ $errors->first('nama_obat') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="jenis_obat">Jenis Obat</label>
                        <input type="text" name="jenis_obat" class="form-control" id="jenis_obat" value="{{ $obat->jenis_obat }}" required>
                        @if($errors->has('jenis_obat'))
                            <div class="text-danger">
                                {{ $errors->first('jenis_obat') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="supplier">Supplier</label>
                        <input type="text" name="supplier" class="form-control" id="supplier" value="{{ $obat->supplier}}" required>
                        @if($errors->has('supplier'))
                            <div class="text-danger">
                                {{ $errors->first('supplier') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="stok">Stok</label>
                        <input type="text" name="stok" class="form-control" id="stok" value="{{ $obat->stok }}" required>
                        @if($errors->has('stok'))
                            <div class="text-danger">
                                {{ $errors->first('stok') }}
                            </div>
                        @endif
                    </div>



                    <div class="form-group">
                        <label for="foto">Foto</label>
                        <input type="file" name="foto" class="form-control-file" id="foto">
                        @if ($obat->foto)
                            <img src="{{ asset('storage/foto/' . $obat->foto) }}" alt="Foto Obat" class="img-thumbnail " style="max-width: 200px; ">
                        @else
                            <p class="mt-2">Tidak ada foto tersimpan.</p>
                        @endif
                        @if($errors->has('foto'))
                            <div class="text-danger">
                                {{ $errors->first('foto') }}
                            </div>
                        @endif
                    </div>

                    
                </div>
                <div class="card-footer">
                    <button type="reset" class="btn btn-dark">Reset</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@push('script')
@endpush
