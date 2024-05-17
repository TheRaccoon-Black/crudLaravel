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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('judul'); // Judul berita
            $table->foreignId('kategori_id') // Kategori berita (foreign key)
                  ->constrained('kategori_news')
                  ->onDelete('cascade');
            $table->text('konten'); // Konten berita
            $table->string('creator'); // Pembuat berita
            $table->string('uploader'); // Pengunggah berita
            $table->string('urlThumbnail'); // URL thumbnail berita
            $table->timestamps(); // Kolom created_at dan updated_at otomatis
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
