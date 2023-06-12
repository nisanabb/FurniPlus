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
        Schema::dropIfExists('data_pengemasan');
        Schema::create('data_pengemasan', function (Blueprint $table) {
            $table->id('id_pengemasan');
            $table->integer('id_pesanan');
            $table->string('nama_pengguna');
            $table->string('alamat');
            $table->integer('no_hp');
            $table->integer('jumlah_pesanan');
            $table->string('status');
            $table->string('resi');
            $table->string('nama_barang');
            $table->string('deskripsi');
            $table->date('tanggal_pengiriman');
            $table->string('deskripsi_pengiriman');
            $table->date('estimasi_sampai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_shipping');
    }
};
