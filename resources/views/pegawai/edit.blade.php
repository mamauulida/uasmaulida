@extends('layouts.app')

@section('title', 'Edit Pegawai')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item"><a href="{{ route('pegawai.index') }}">Data Pegawai</a></li>
    <li class="breadcrumb-item active">Edit</li>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <form action="{{ route('pegawai.update', $pegawai->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="id_pegawai">Id Pegawai</label>
                        <input type="text" name="id_pegawai" class="form-control" id="id_pegawai" value="{{ $pegawai->id_pegawai }}" required>
                        @if($errors->has('id_pegawai'))
                            <div class="text-danger">
                                {{ $errors->first('id_pegawai') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="nama_pegawai">Nama Pegawai</label>
                        <input type="text" name="nama_pegawai" class="form-control" id="nama_pegawai" value="{{ $pegawai->nama_pegawai }}" required>
                        @if($errors->has('nama_pegawai'))
                            <div class="text-danger">
                                {{ $errors->first('nama_pegawai') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="no_hp">No Hp</label>
                        <input type="text" name="no_hp" class="form-control" id="no_hp" value="{{ $pegawai->no_hp }}" required>
                        @if($errors->has('no_hp'))
                            <div class="text-danger">
                                {{ $errors->first('no_hp') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="alamat" value="{{ $pegawai->alamat }}" required>
                        @if($errors->has('alamat'))
                            <div class="text-danger">
                                {{ $errors->first('alamat') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="posisi">Posisi</label>
                        <input type="text" name="posisi" class="form-control" id="posisi" value="{{ $pegawai->posisi }}" required>
                        @if($errors->has('posisi'))
                            <div class="text-danger">
                                {{ $errors->first('posisi') }}
                            </div>
                        @endif
                    </div>



                    <div class="form-group">
                        <label for="foto">Foto</label>
                        <input type="file" name="foto" class="form-control-file" id="foto">
                        @if ($pegawai->foto)
                            <img src="{{ asset('storage/foto/' . $pegawai->foto) }}" alt="Foto Pegawai" class="img-thumbnail " style="max-width: 200px; ">
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
