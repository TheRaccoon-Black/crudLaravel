<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanaDesa extends Model
{
    use HasFactory;

    protected $table = 'dana_desa';

    protected $fillable = [
        'name', 'tahun', 'sumberDana', 'penerimaDana', 'tanggalPenerimaan',
        'penerimaManfaat', 'keterangan', 'tanggalPelaporan', 'alokasiDana',
        'status', 'jumlahDana'
    ];
}
