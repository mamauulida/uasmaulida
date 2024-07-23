<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\{
    DashboardController,
    Jadwal_PegawaiController,
    PegawaiController,
    ObatController,
    PelangganController,
    PenggunaController,
    TransaksiController,
};

Route::get('/', function () {
    return redirect('/login');
});

Route::post('/logout', function (Request $request) {
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    auth()->logout();
    return redirect('/');
})->name('logout');

Route::group([
    'middleware' => ['auth', 'role:admin,karyawan']
], function() {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    

    Route::group([
        'middleware' => 'role:admin'
    ], function () {

        // Rute yang hanya dapat diakses oleh admin
        // Route::resource('/pengguna', PenggunaController::class);
        Route::resource('/pegawai', PegawaiController::class)->except(['show']);
        Route::resource('/obat', ObatController::class)->except(['show']);
        Route::resource('/jadwal_pegawai', Jadwal_PegawaiController::class)->except(['show']);
        Route::resource('/transaksi', TransaksiController::class)->except(['show']);
        Route::resource('/pelanggan', PelangganController::class)->except(['show']);
       

        Route::get('/pegawai/details', [PegawaiController::class, 'details'])->name('pegawai.details');
        Route::delete('/pegawai/{id}', [PegawaiController::class, 'destroy'])->name('pegawai.delete');
        Route::get('/pegawai/{pegawai}/edit', [PegawaiController::class, 'edit'])->name('pegawai.edit');
        Route::get('/obat/details', [ObatController::class, 'details'])->name('obat.details');
        Route::delete('/obat/{id}', [ObatController::class, 'destroy'])->name('obat.delete');
        Route::get('/obat/{obat}/edit', [ObatController::class, 'edit'])->name('obat.edit');
        Route::get('/jadwal_pegawai/details', [Jadwal_PegawaiController::class, 'details'])->name('jadwal_pegawai.details');
        Route::delete('/jadwal_pegawai/{id}', [Jadwal_PegawaiController::class, 'destroy'])->name('jadwal_pegawai.delete');
        Route::get('/jadwal_pegawai/{jadwal_pegawai}/edit', [Jadwal_PegawaiController::class, 'edit'])->name('jadwal_pegawai.edit');
        Route::get('/transaksi/details', [TransaksiController::class, 'details'])->name('transaksi.details');
        Route::delete('/transaksi/{id}', [TransaksiController::class, 'destroy'])->name('transaksi.delete');
        Route::get('/transaksi/{transaksi}/edit', [TransaksiController::class, 'edit'])->name('transaksi.edit');
        Route::get('/pelanggan/details', [PelangganController::class, 'details'])->name('pelanggan.details');
        Route::delete('/pelanggan/{id}', [PelangganController::class, 'destroy'])->name('pelanggan.delete');
        Route::get('/pelanggan/{pelanggan}/edit', [PelangganController::class, 'edit'])->name('pelanggan.edit');
    });
});
