<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserJurusan extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'id_user',
        'id_jurusan',
    ];
    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'id_jurusan');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    protected $table = 'user_jurusan';
}
