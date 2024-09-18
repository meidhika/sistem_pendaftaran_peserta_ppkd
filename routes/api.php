<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get("/", function(){
    return "Api Jalan";
});

Route::get('jurusan', [\App\Http\Controllers\API\RestController::class, 'jurusan']);
