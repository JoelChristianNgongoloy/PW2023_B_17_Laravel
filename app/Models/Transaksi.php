<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'Transaksi';
    protected $fillable = [
        'id_mobil', // asumsikan ini adalah foreign key ke tabel 'mobil'
        'id_user', // asumsikan ini adalah foreign key ke tabel 'users'
        'metode_pembayaran',
        'status',
        'tanggal'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function mobil()
    {
        return $this->belongsTo(Mobil::class, 'id_mobil');
    }

}
