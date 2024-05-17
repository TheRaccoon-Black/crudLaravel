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
        Schema::create('kartu_keluarga', function (Blueprint $table) {
            $table->id();
            $table->string('nameKK'); // Nama kepala keluarga
            $table->string('noKK')->unique(); // Nomor Kartu Keluarga, harus unik
            $table->string('alamat'); // Alamat keluarga
            $table->integer('jumlahAnggota'); // Jumlah anggota keluarga
            $table->string('urlKK'); // URL atau path ke file Kartu Keluarga
            $table->timestamps(); // Kolom created_at dan updated_at otomatis
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kartu_keluarga');
    }
};
