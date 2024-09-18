<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jurusan;

class RestController extends Controller
{
    public function jurusan()
    {
        $jurusan = Jurusan::get();
        return response()->json(['data' => $jurusan, 'message'=> 'Data Jurusan'],200);
    }
}
