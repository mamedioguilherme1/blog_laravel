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
Route::get('/replies/{id}', 'RepliesController@index'); //feito
Route::post('/posts', 'PostsController@store'); //feito
Route::post('/comments', 'CommentsController@store'); //feito
Route::delete('/comments/{id}', 'CommentsController@destroy'); //feito
Route::post('/replies', 'RepliesController@store'); //feito
Route::delete('/reply/{id}', 'RepliesController@destroy'); //feito


Route::get('/posts/{id}/edit', 'PostsController@edit'); //feito
Route::put('posts/{id}', 'PostsController@update'); //feito
Route::get('posts/{id}/delete', 'PostsController@destroy'); //feito

Route::get('/posts/{id}/detalhes', 'PostsController@show'); //feito









    
