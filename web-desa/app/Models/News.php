<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';

    protected $fillable = [
        'judul', 'kategori_id', 'konten', 'creator', 'uploader', 'urlThumbnail'
    ];

    public function kategori()
    {
        return $this->belongsTo(KategoriNews::class, 'kategori_id');
    }
}
