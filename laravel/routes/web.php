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

route::get('/politica/{dia}/{mes}/{ano}/{titulo?}',
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

route::get('/{operation}/{v1}/{v2}','App\Http\Controllers\aritmetcontroller@cal')
    ->wherein("operation",['soma','subtracao','multiplicacao','divisao'])
    ->where(["v1" => "[0-9]+" , "v2" => "[0-9]+"]);
Auth::routes();



/* middleware = intermediador entre vossa beldade e o servidor */
/* passando um array com o middleware, passando para o web.php */

route::group(['middleware' => 'web'], function(){

    Route::get('/', 'App\Http\Controllers\HomeController@index');

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



});

/* sequencia de criação, rota , controller, view */
/* rota usuario */  
route::get('/users', 'App\Http\Controllers\usersController@index');

/* rota novo usuario */
route::get('/users/new', 'App\Http\Controllers\usersController@new');

/* rota add usuario */
route::post('/users/add', 'App\Http\Controllers\usersController@add');

/* rota recebe os dados e manda para o form do update  */
route::get('/users/{id}edit', 'App\Http\Controllers\usersController@edit');

/* rota update */
route::post('/users/update/{id}', 'App\Http\Controllers\usersController@update');

/*rota delete  */
route::delete('/users/delete/{id}', 'App\Http\Controllers\usersController@destroy');
