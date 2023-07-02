<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class donasi extends Model
{
    use HasFactory;
    protected $table = 'donasis';

    protected $fillable = [
        'nama',
        'email',
        'nominal',
        'metode_bayar',
        'catatan'
    ];
    public $timestamps = false;
}
