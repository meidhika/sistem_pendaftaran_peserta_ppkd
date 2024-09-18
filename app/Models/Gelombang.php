<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gelombang extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable =
    [
        'nama_gelombang',
        'aktif',
    ];
    public function pesertapelatihan(){

        return $this->hasMany(PesertaPelatihan::class, 'id_gelombang', 'id');
    }
    protected $table = 'gelombang';
    protected $date = ['deleted_at'];
    
}
