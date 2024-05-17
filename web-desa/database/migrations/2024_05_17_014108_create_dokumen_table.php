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
        Schema::create('dokumen', function (Blueprint $table) {
            $table->id(); // Kolom ID utama, auto-increment
            $table->string('name'); // Nama dokumen
            $table->string('level'); // Level dokumen (misalnya confidential, public, internal, dll.)
            $table->string('jenis'); // Jenis dokumen (misalnya laporan, memo, surat, dll.)
            $table->string('urlFile'); // URL file dokumen yang diunggah
            $table->timestamps(); // Kolom created_at dan updated_at otomatis
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokumen');
    }
};
