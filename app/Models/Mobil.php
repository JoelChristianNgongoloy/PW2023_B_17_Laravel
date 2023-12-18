<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'tipe_mobil',
        'tahun_produksi',
        'harga_mobil',
        'warna',
        'deskripsi',
        'stok',
        'merk',
        'image',
    ];

}
