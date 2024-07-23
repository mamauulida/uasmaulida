@extends('layouts.app')

@section('title', 'Edit Pelanggan')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item"><a href="{{ route('pelanggan.index') }}">Data Pelanggan</a></li>
    <li class="breadcrumb-item active">Edit</li>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <form action="{{ route('pelanggan.update', $pelanggan->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="id_pelanggan">Id Pelanggan</label>
                        <input type="text" name="id_pelanggan" class="form-control" id="id_pelanggan" value="{{ $pelanggan->id_pelanggan }}" required>
                        @if($errors->has('id_pelanggan'))
                            <div class="text-danger">
                                {{ $errors->first('id_pelanggan') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama </label>
                        <input type="text" name="nama" class="form-control" id="nama" value="{{ $pelanggan->nama }}" required>
                        @if($errors->has('nama'))
                            <div class="text-danger">
                                {{ $errors->first('nama') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="no_hp">No Hp</label>
                        <input type="text" name="no_hp" class="form-control" id="no_hp" value="{{ $pelanggan->no_hp }}" required>
                        @if($errors->has('no_hp'))
                            <div class="text-danger">
                                {{ $errors->first('no_hp') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="alamat" value="{{ $pelanggan->alamat }}" required>
                        @if($errors->has('alamat'))
                            <div class="text-danger">
                                {{ $errors->first('alamat') }}
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
