@extends('layouts.app')

@section('title', 'Edit Jadwal Pegawai')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item"><a href="{{ route('jadwal_pegawai.index') }}">Data Jadwal Pegawai</a></li>
    <li class="breadcrumb-item active">Edit</li>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <form action="{{ route('jadwal_pegawai.update', $jadwal_pegawai->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="id_jadwal_pegawai">Id Jadwal Pegawai</label>
                        <input type="text" name="id_jadwal_pegawai" class="form-control" id="id_jadwal_pegawai" value="{{ $jadwal_pegawai->id_jadwal_pegawai }}" required>
                        @if($errors->has('id_jadwal_pegawai'))
                            <div class="text-danger">
                                {{ $errors->first('id_jadwal_pegawai') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="id_pegawai">Id Pegawai</label>
                        <input type="text" name="id_pegawai" class="form-control" id="id_pegawai" value="{{ $jadwal_pegawai->id_pegawai }}" required>
                        @if($errors->has('id_pegawai'))
                            <div class="text-danger">
                                {{ $errors->first('id_pegawai') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="nama_pegawai">Nama Pegawai</label>
                        <input type="text" name="nama_pegawai" class="form-control" id="nama_pegawai" value="{{ $jadwal_pegawai->nama_pegawai }}" required>
                        @if($errors->has('nama_pegawai'))
                            <div class="text-danger">
                                {{ $errors->first('nama_pegawai') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="id_shift">Id Shift</label>
                        <input type="text" name="id_shift" class="form-control" id="id_shift" value="{{ $jadwal_pegawai->id_shift}}" required>
                        @if($errors->has('id_shift'))
                            <div class="text-danger">
                                {{ $errors->first('id_shift') }}
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
