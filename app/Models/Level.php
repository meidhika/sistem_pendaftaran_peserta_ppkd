<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Level extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable =['nama_level'];
    public function user()
    {
        return $this->hasMany(User::class, 'id_level', 'id');
    }


    protected $date = ['deleted_at'];


     
}
