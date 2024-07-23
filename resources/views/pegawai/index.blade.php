@extends('layouts.app')

@section('title', 'Data Pegawai')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Data Pegawai</a></li>
@endsection

@section('content')
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <a href="{{ route('pegawai.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah Pegawai</a>
      </div>
      <div class="card-body">
        <table class="table table-bordered table-hover table-striped">
          <thead>
            <th width = "5%" class="text-center">No</th>
            <th>Id Pegawai</th>
            <th>Nama Pegawai</th>
            <th>No Hp</th>
            <th>Alamat</th>
            <th>Posisi</th>
            <th>Foto</th>
            <th>Aksi</th>
          </thead>
          <tbody>
            @foreach ($pegawai as $index => $row)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $row->id }}</td>
                          <td>{{ $row->nama_pegawai }}</td>
                          <td>{{ $row->no_hp }}</td>
                          <td>{{ $row->alamat }}</td>
                          <td>{{ $row->posisi}}</td>
                          <td>
                              @if ($row->foto)
                              <img src="{{ asset('storage/foto/' . $row->foto) }}" alt="Foto Pegawai" style="width: auto; height: auto; max-width: 160px; max-height: 120px;">
                              @else
                                  <p>Tidak ada foto</p>
                              @endif
                          </td>
                        
                  <td class="text-center">
                    <a href="{{ route('pegawai.edit', $row->id) }}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a>
                    <!-- Tombol untuk menampilkan modal -->
                    <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#confirmDeleteModal" data-url="{{ route('pegawai.delete', $row->id) }}">
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

@include('pegawai.modal-delete')

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
