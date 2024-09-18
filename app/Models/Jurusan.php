<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jurusan extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable =
    [
        'nama_jurusan',
    ];
    public function pesertapelatihan()
    {
        return $this->hasMany(PesertaPelatihan::class, 'id_jurusan', 'id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_jurusan', 'id_jurusan', 'id_user');
    }

    protected $table = 'jurusan';
    protected $date = ['deleted_at'];
}
