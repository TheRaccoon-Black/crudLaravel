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
        Schema::create('anggota_kk', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nama anggota keluarga
            $table->string('nik')->unique(); // Nomor Induk Kependudukan (NIK), harus unik
            $table->foreignId('kartu_keluarga_id') // Foreign key yang merujuk pada tabel kartuKeluarga
                  ->constrained('kartu_keluarga')
                  ->onDelete('cascade');
            $table->string('hubungan'); // Hubungan dalam keluarga (misalnya ayah, ibu, anak, dll.)
            $table->enum('gender', ['male', 'female']); // Jenis kelamin
            $table->date('tanggalLahir'); // Tanggal lahir
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
