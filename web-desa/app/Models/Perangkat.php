<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perangkat extends Model
{
    use HasFactory;

    protected $table = 'perangkat';

    protected $fillable = [
        'name', 'nik', 'jabatan', 'periodeMulai', 'periodeBerakhir', 'urlPhoto'
    ];
}
