<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $table = 'pembayaran';
    protected $fillable = [
        'id_item_pembayaran', // asumsikan ini adalah foreign key ke tabel lain
        'tanggal_pembayaran',
    ];

    // Tambahkan relasi ke model lain jika diperlukan
}
