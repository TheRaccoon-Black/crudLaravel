<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KartuKeluarga extends Model
{
    use HasFactory;

    protected $table = 'kartu_keluarga';

    protected $fillable = [
        'nameKK', 'noKK', 'alamat', 'jumlahAnggota', 'urlKK'
    ];

    public function anggota()
    {
        return $this->hasMany(AnggotaKk::class, 'kartu_keluarga_id');
    }
}
