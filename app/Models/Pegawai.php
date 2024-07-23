<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $table = 'pegawai';

    protected $fillable = [
        'id_pegawai',
        'nama_pegawai',
        'no_hp',
        'alamat',
        'posisi',
        'foto'
    ];
}
