<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'users';
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'no_hp',
        'alamat',
        'verify_key',
        'img_profil',
        'type',
        'active',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function pemesanans()
    {
        return $this->hasMany(Pemesanan::class, 'id_user');
    }

    // Tambahkan relasi ke model 'Review' jika user dapat memiliki banyak review
}
