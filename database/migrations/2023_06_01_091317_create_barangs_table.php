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
        Schema::create('barangs', function (Blueprint $table) {
            $table->unsignedInteger('kode_barang')->autoIncrement();
            $table->string('nama_barang');
            $table->mediumInteger('harga_barang')->nullable();
            $table->text('deskripsi_barang');
            $table->unsignedInteger('kode_satuan');
            $table->timestamps();

            $table->foreign('kode_satuan')->references('kode_satuan')->on('satuans');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangs');
    }
};
