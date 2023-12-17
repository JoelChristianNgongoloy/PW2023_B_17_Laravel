<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    protected $table = 'pemesanan';
    protected $fillable = [
        'id_mobil', // asumsikan ini adalah foreign key ke tabel 'mobil'
        'id_user', // asumsikan ini adalah foreign key ke tabel 'users'
        'metode_pembayaran',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function pembayaran()
    {
        return $this->hasOne(Pembayaran::class, 'id_pemesanan');
    }

    public function review()
    {
        return $this->hasOne(Review::class, 'id_pemesanan');
    }

    public function mobil()
    {
        return $this->belongsTo(Mobil::class, 'id_mobil');
    }

}
