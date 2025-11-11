<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qurban extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_peserta',
        'telepon',
        'alamat',
        'paket',
        'harga',
        'jenis_hewan',
    ];
}
