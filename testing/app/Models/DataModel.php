<?php

// app/Models/DataModel.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataModel extends Model
{
    use HasFactory;

    protected $table = 'data'; // tambahkan ini untuk menggunakan tabel 'data'

    protected $fillable = [
        'name', // pastikan sesuai dengan nama kolom dalam tabel
        'alamat',
        'umur',
        'hobi',
    ];
}

