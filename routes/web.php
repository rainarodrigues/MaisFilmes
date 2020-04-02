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

Route::get('/filmes','FilmesController@index')
	->name('listar_filmes');;
Route::get('/filmes/criar','FilmesController@Create')
	->name('criar_filmes');
Route::post('/filmes/criar','FilmesController@store');
Route::delete('/filmes/{id}','FilmesController@destroy');



