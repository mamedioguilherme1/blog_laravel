<?php

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

Route::get('/posts', 'PostsController@index'); // feito
Route::get('/posts/create', 'PostsController@create'); //feito
Route::post('/posts', 'PostsController@store'); //feito

Route::get('/posts/{id}/edit', 'PostsController@edit'); //feito
Route::put('posts/{id}', 'PostsController@update'); //feito
Route::delete('posts/{id}', 'PostsController@destroy'); //feito

Route::get('/posts/{id}', 'PostsController@show'); //feito







    
