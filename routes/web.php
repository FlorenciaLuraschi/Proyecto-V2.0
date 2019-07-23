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

Auth::routes();

Route::get('/register', 'Auth\RegisterController@index')->name('register');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/posts', 'PostsController@index');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/new', 'PostsController@create');
Route::delete('/posts/{post}', 'PostsController@destroy');
Route::get('/posts/{post}/edit', 'PostsController@edit');
Route::patch('/posts/{post}', 'PostsController@update');

Route::get('/ayuda', function () {
    return view('ayuda');
});
Route::get('/juego', function () {
    return view('juego');
});
Route::get('/perfil', function () {
    return view('perfil');
});
Route::get('/search', 'BuscadorController@buscar');

Route::get('/post/{id}/heartbyme', 'PostController@heartbyme');
Route::post('/post/heart', 'PostController@heart');

Route::get('/perfil/tabla', 'GamesController@index');
