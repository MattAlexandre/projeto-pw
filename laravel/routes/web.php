<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

route::get('/minha/rota',
function(){
    echo'hello world';
});

route::get('/home/iniciar',
function(){
    echo' wellcome the page ' ;
});

route::get('/politica/{ano}/{titulo?}',
function($ano , $titulo){
    echo "<h1>" . implode("", explode(".",$titulo)) ."</h1>";
});

roure::get('/politica/{dia}/{mes}/{ano}/{titulo?}',
function($dia , $mes , $ano , $titulo){
    echo "<h1>" . implode("", explode(".",$titulo)) ."</h1>";
});

route::get('/cadadstro/{id}',
function($id = null){
    echo $id == null ? "não tem id" : $id; 
})->where("id","[0-9]+");

route::Get('/cadastro/{nome}/{idade}',
function($nome , $idade ){
    $idade = 15;
    echo $idade > 18 ? "menor de idade" : "maior de idade";
})->where("idade","[1-100]+");