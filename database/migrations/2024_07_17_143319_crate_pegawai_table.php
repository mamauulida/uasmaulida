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
        Schema::create('pegawai', function (Blueprint $table) {
            $table->id();
            $table->string('id_pegawai', 255);
            $table->string('nama_pegawai', 255);
            $table->string('no_hp', 255);
            $table->string('alamat', 255);
            $table->string('posisi', 255);
            $table->string('foto')->nullable(); // Kolom foto, dapat kosong (nullable)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawai');
    }
};
