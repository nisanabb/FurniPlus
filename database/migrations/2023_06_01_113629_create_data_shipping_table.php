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
        Schema::dropIfExists('data_shipping');
        
        Schema::create('data_shipping', function (Blueprint $table) {
            $table->id('resi');
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
        Schema::dropIfExists('data_shipping');
    }
};
