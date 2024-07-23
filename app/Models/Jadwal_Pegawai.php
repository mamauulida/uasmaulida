<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jadwal_pegawai extends Model
{
    use HasFactory;

    protected $table = 'jadwal_pegawai';

    protected $fillable = [
        'id_jadwal_pegawai',
        'id_pegawai',
        'nama_pegawai',
        'id_shift',
    ];
}
