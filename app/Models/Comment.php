<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'comment';
    protected $fillable = [
        'id_mobil',
        'id_user',
        'ulasan'
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