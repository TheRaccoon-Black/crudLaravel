<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnggotaKk extends Model
{
    use HasFactory;

    protected $table = 'anggota_kk';

    protected $fillable = [
        'name', 'nik', 'kartu_keluarga_id', 'hubungan', 'gender', 'tanggalLahir'
    ];

    public function kartuKeluarga()
    {
        return $this->belongsTo(KartuKeluarga::class, 'kartu_keluarga_id');
    }
}
