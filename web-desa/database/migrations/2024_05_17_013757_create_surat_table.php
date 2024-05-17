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
        Schema::create('surat', function (Blueprint $table) {
            $table->id(); // Kolom ID utama, auto-increment
            $table->string('name'); // Nama pengirim atau penerima surat
            $table->string('noSurat')->unique(); // Nomor surat, harus unik
            $table->text('deskripsi')->nullable(); // Deskripsi surat, opsional
            $table->string('jenis'); // Jenis surat (misalnya resmi, pribadi, undangan, dll.)
            $table->string('urlFile'); // URL file surat yang diunggah
            $table->timestamps(); // Kolom created_at dan updated_at otomatis
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat');
    }
};
