@extends('layouts.app')

@section('title', 'Dashboard')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Dashboard</li>
@endsection

@section('content')
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>10</h3>
                    <p>Pegawai</p>
                </div>
                <div class="icon">
                    <i class="fas fa-users"></i>
                </div>
                <a href="#" class="small-box-footer"><i class="fas fa-angle-up"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>70</h3>
                    <p>Obat</p>
                </div>
                <div class="icon">
                    <i class="fas fa-boxes"></i>
                </div>
                <a href="#" class="small-box-footer"><i class="fas fa-angle-up"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>50</h3>
                    <p>Transaksi</p>
                </div>
                <div class="icon">
                    <i class="fas fa-box"></i>
                </div>
                <a href="#" class="small-box-footer"><i class="fas fa-angle-up"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>45</h3>
                    <p>Pelanggan</p>
                </div>
                <div class="icon">
                    <i class="fas fa-users"></i>
                </div>
                <a href="#" class="small-box-footer"><i class="fas fa-angle-up"></i></a>
            </div>
        </div>
    </div>
    <!-- /.row -->

    <!-- Main row -->
    <div class="row">
        <!-- Left col -->
        <div class="col-lg-12">
            <!-- Tabel Daftar Barang -->
            {{-- <div class="card">
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Kategori</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jumlahBarang as $barang)
                                <tr>
                                    <td>{{ $barang->id }}</td>
                                    <td>{{ $barang->kd_barang }}</td>
                                    <td>{{ $barang->nama }}</td>
                                    <td>{{ $barang->kategoribarang->nama_kategori }}</td>
                                    <td>{{ $barang->jumlah }}</td>
                                    <td>{{ $barang->harga_beli }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div> --}}
@endsection

@push('script')

<script>

</script>
@endpush