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
        Schema::create('orderans', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('gambar');
            $table->string('barang');
            $table->string('harga');
            $table->string('kurir');
            $table->string('awb');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orderans');
    }
};
