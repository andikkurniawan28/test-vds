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
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->string("kode_barang_internal")->nullable();
            $table->string("kode_barcode_asli")->nullable();
            $table->string("nama_barang")->nullable();
            $table->string("nama_singkat_barang")->nullable();
            // $table->foreignId("master_supplier_id")->constrained()->onDelete("cascade");
            // $table->foreignId("master_brand_id")->constrained()->onDelete("cascade");
            // $table->foreignId("master_kategori_id")->constrained()->onDelete("cascade");
            // $table->unsignedBigInteger("satuan_barang1");
            // $table->unsignedBigInteger("satuan_barang2");
            // $table->unsignedBigInteger("satuan_barang3");
            // $table->foreign("satuan_barang1")->references("id")->on("master_satuans")->onDelete("cascade");
            // $table->foreign("satuan_barang2")->references("id")->on("master_satuans")->onDelete("cascade");
            // $table->foreign("satuan_barang3")->references("id")->on("master_satuans")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};
