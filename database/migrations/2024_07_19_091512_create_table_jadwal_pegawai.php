<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jadwal_pegawai', function (Blueprint $table) {
            $table->id();
            $table->string('id_jadwal_pegawai', 255);
            $table->string('id_pegawai', 255);
            $table->string('nama_pegawai', 255);
            $table->string('id_shift', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_jadwal_pegawai');
    }
};
