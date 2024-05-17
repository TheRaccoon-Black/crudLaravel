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
        Schema::create('perangkat', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nik')->unique(); // NIK perangkat desa  
            $table->string('jabatan'); // Jabatan perangkat desa
            $table->date('periodeMulai'); // Tanggal mulai periode jabatan
            $table->date('periodeBerakhir')->nullable(); // Tanggal berakhir periode jabatan (opsional)
            $table->string('urlPhoto'); // URL foto perangkat desa
            $table->timestamps(); // Kolom created_at dan updated_at otomatis
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perangkat');
    }
};
