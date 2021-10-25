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

Route::get('/menu', [\App\Http\Controllers\MenuController::class, 'index']);

Route::get('/tests', [\App\Http\Controllers\TestController::class, 'index']);

Route::get('/tests/{id}', [\App\Http\Controllers\TestController::class, 'show']);

Route::delete('/tests/{id}', [\App\Http\Controllers\TestController::class, 'destroy']);

Route::post('/tests', [\App\Http\Controllers\TestController::class, 'store']);

Route::put('/tests/{id}', [\App\Http\Controllers\TestController::class, 'update']);

Route::apiResource('products', \App\Http\Controllers\ProductController::class);
