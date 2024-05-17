<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriNews extends Model
{
    use HasFactory;

    protected $table = 'kategori_news';

    protected $fillable = [
        'kategori'
    ];

    public function news()
    {
        return $this->hasMany(News::class, 'kategori_id');
    }
}
