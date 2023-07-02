<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sumbang_makan extends Model
{
    use HasFactory;
    protected $table = 'sumbang_makans';

    protected $fillable = [
        'user_id',
        'nama_makanan',
        'porsi_makanan',
        'no_telp',
        'tanggal_dibuat',
        'tanggal_kadaluarsa',
        'id_lokasi',
        'foto_makanan'
    ];
    public $timestamps = false;
}
