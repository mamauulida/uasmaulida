@extends('layouts.app')

@section('title', 'Data Obat')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Data Obat</a></li>
@endsection

@section('content')
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <a href="{{ route('obat.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah Obat</a>
      </div>
      <div class="card-body">
        <table class="table table-bordered table-hover table-striped">
          <thead>
            <th width = "5%" class="text-center">No</th>
            <th>Id Obat</th>
            <th>Nama Obat</th>
            <th>Jenis Obat</th>
            <th>Supplier</th>
            <th>Stok</th>
            <th>Foto</th>
            <th>Aksi</th>
          </thead>
          <tbody>
            @foreach ($obat as $index => $row)
                <tr>
                    <td>{{ $index + 1 }}</td>
                          <td>{{ $row->id_obat }}</td>
                          <td>{{ $row->nama_obat}}</td>
                          <td>{{ $row->jenis_obat }}</td>
                          <td>{{ $row->supplier }}</td>
                          <td>{{ $row->stok}}</td>
                          <td>
                              @if ($row->foto)
                              <img src="{{ asset('storage/foto/' . $row->foto) }}" alt="Foto Obat" style="width: auto; height: auto; max-width: 160px; max-height: 120px;">
                              @else
                                  <p>Tidak ada foto</p>
                              @endif
                          </td>
                        
                  <td class="text-center">
                    <a href="{{ route('obat.edit', $row->id) }}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a>
                    <!-- Tombol untuk menampilkan modal -->
                    <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#confirmDeleteModal" data-url="{{ route('obat.destroy', $row->id) }}">
                        <i class="fas fa-trash"></i>
                    </button>
                </td>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@include('obat.modal-delete')

@if(session('success'))
  <script>
      Swal.fire({
          icon: 'success',
          title: 'Berhasil!',
          text: '{{ session('success') }}',
          showConfirmButton: false,
          timer: 3000
      });
  </script>
@endif

@if(session('error'))
  <script>
      Swal.fire({
          icon: 'error',
          title: 'Gagal!',
          text: '{{ session('error') }}',
          showConfirmButton: false,
          timer: 3000
      });
  </script>
@endif
@endsection


@push('script')

<script>
  $('.table').DataTable()
</script>
@endpush
