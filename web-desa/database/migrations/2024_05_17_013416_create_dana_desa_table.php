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
        Schema::create('dana_desa', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->year('tahun');
            $table->decimal('jumlahDana', 15, 2); // Jumlah dana yang diterima
            $table->string('sumberDana');
            $table->string('penerimaDana');
            $table->date('tanggalPenerimaan');
            $table->string('penerimaManfaat'); // Nama penerima manfaat
            $table->text('keterangan')->nullable(); // Keterangan tambahan
            $table->date('tanggalPelaporan')->nullable(); // Tanggal pelaporan
            $table->string('alokasiDana'); // Alokasi dana (misalnya untuk apa dana tersebut digunakan)
            $table->string('status')->default('pending'); // Status pelaporan atau penggunaan dana
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dana_desa');
    }
};
