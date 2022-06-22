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

/*rota */
Route::get('/produto', 'App\Http\Controllers\ProductController@index');

Route::get('/produto/{id}', 'App\Http\Controllers\ProductController@show');

Route::post('/produto', 'App\Http\Controllers\ProductController@store');

Route::delete('/produto/{id}', 'App\Http\Controllers\ProductController@destroy');

Route::get('/produto/{id}', 'App\Http\Controllers\ProductController@update');