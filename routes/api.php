<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/fb', [\App\Http\Controllers\FBController::class,'add'])->middleware(\App\Http\Middleware\EnsureTokenIsValid::class);
Route::post('/delete', [\App\Http\Controllers\FBController::class,'delete'])->middleware(\App\Http\Middleware\EnsureTokenIsValid::class);
Route::post('/test', [\App\Http\Controllers\FBController::class,'delete'])->middleware(\App\Http\Middleware\EnsureTokenIsValid::class);
