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
        Schema::dropIfExists('hasil_pengiriman');


        Schema::create('hasil_pengiriman', function (Blueprint $table) {
            $table->id('id_pengiriman');
            $table->unsignedBigInteger('id_pengemasan');
            $table->foreign('id_pengemasan')->references('id_pengemasan')->on('data_pengemasan');
            $table->string('nama_pengguna');
            $table->string('alamat');
            $table->integer('no_hp');
            $table->integer('jumlah_pesanan');
            $table->string('status');
            $table->unsignedBigInteger('resi')->nullable();
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
    public function down()
    {
    }
};
