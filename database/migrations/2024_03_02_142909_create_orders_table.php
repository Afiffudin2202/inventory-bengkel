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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('no_pembelian')->unique();
            $table->string('barang_id');
            $table->string('supplier_id');
            $table->integer('harga_satuan');
            $table->integer('jumlah_beli');
            $table->integer('total_harga');
            $table->string('tgl_pembelian');

            $table->foreign('barang_id')->references('kd_barang')->on('barangs')->onDelete('cascade');
            $table->foreign('supplier_id')->references('kd_supplier')->on('suppliers')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
