<?php

use App\Http\Controllers\Auth\Login;
use App\Http\Controllers\Auth\Register;
use App\Http\Controllers\Child\GetChild;
use App\Http\Controllers\Child\RegisterChild;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->get('/children', [GetChild::class, 'index']);

Route::get('/', fn() => response()->json(["tes"]));
Route::post('/register', Register::class);
Route::post('/login', Login::class);
// Route::post('/register-child', RegisterChild::class);
Route::middleware('auth:sanctum')->post('/register-child', [RegisterChild::class, 'store']);
Route::get('/ping', fn() => response()->json(['pong']));
