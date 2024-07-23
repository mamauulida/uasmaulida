@extends('layouts.app')

@section('title', 'Edit Transaksi')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item"><a href="{{ route('transaksi.index') }}">Data Transaksi</a></li>
    <li class="breadcrumb-item active">Edit</li>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <form action="{{ route('transaksi.update', $transaksi->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="id_transaksi">Id Transaksi</label>
                        <input type="text" name="id_transaksi" class="form-control" id="id_transaksi" value="{{ $transaksi->id_transaksi }}" required>
                        @if($errors->has('id_transaksi'))
                            <div class="text-danger">
                                {{ $errors->first('id_transaksi') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="detail_transaksi">Detail Transaksi</label>
                        <input type="text" name="detail_transaksi" class="form-control" id="detail_transaksi" value="{{ $transaksi->detail_transaksi }}" required>
                        @if($errors->has('detail_transaksi'))
                            <div class="text-danger">
                                {{ $errors->first('detail_transaksi') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" name="tanggal" class="form-control" id="tanggal" value="{{ $transaksi->tanggal}}" required>
                        @if($errors->has('tanggal'))
                            <div class="text-danger">
                                {{ $errors->first('tanggal') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="total_transaksi">Total Transaksi</label>
                        <input type="text" name="total_transaksi" class="form-control" id="total_transaksi" value="{{ $transaksi->total_transaski }}" required>
                        @if($errors->has('total_transaski'))
                            <div class="text-danger">
                                {{ $errors->first('total_transaksi') }}
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
