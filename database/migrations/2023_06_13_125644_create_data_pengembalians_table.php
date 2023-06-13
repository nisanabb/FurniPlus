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
        Schema::dropIfExists('data_pengembalian');

        Schema::create('data_pengembalian', function (Blueprint $table) {
            $table->id('id_refund');
            $table->unsignedBigInteger('id');
            $table->string('nama_pengguna');
            $table->string('alamat');
            $table->integer('no_hp');
            $table->integer('jumlah_pesanan');
            $table->string('status');
            $table->integer('resi')->nullable();
            $table->string('nama_barang')->nullable();;
            $table->string('alasan_refund');
            $table->string('deskripsi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_pengembalians');
    }
};
