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
        
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->string('id_transaksi', 255);
            $table->string('detail_transaksi', 255);
            $table->string('tanggal', 255);
            $table->string('total_transaksi', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_transaksi');
    }
};
