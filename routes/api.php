<?php

use App\Http\Controllers\Auth\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/', fn() => response()->json(["tes"]));
Route::post('auth/register', Register::class);
