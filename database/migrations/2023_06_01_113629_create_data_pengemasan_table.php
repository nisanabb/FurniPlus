<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
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
            $table->unsignedBigInteger('resi')->nullable();
            $table->foreign('resi')->references('resi')->on('data_shipping');
            $table->string('nama_barang');
            $table->string('deskripsi');
            $table->date('tanggal_pengiriman')->nullable();
            $table->string('deskripsi_pengiriman')->nullable();
            $table->date('estimasi_sampai')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    }
};
