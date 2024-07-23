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
        Schema::create('obat', function (Blueprint $table) {
            $table->id();
            $table->string('id_obat', 255);
            $table->string('nama_obat', 255);
            $table->string('jenis_obat', 255);
            $table->string('supplier', 255);
            $table->string('stok', 255);
            $table->string('foto')->nullable(); // Kolom foto, dapat kosong (nullable)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_obat');
    }
};
