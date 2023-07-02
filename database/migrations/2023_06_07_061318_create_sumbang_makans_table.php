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
        Schema::create('sumbang_makans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_makanan');
            $table->string('porsi_makanan');
            $table->string('no_telp');
            $table->date('tanggal_dibuat');
            $table->date('tanggal_kadaluarsa');
            $table->string('foto_makanan');
            $table->string('id_lokasi')-> references('id')->on('lokasi');
            $table->timestamps();
            $table->foreignId('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sumbang_makans');
    }
};
