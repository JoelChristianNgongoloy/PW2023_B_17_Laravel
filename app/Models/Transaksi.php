<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksi';
    protected $fillable = [
        'id_mobil',
        'id_user',
        'metode_pembayaran', 
        'status',
        'tanggal'
    ];

    public $timestamps = false;

    public function mobil()
    {
        return $this->belongsTo(Mobil::class, 'id_mobil');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

}