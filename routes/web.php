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
// Route::get('/perfil', function () {
//     return view('perfil');
// });

Route::get('/search', 'BuscadorController@buscar');
Route::get('/editPerfil/{user}', 'PerfilController@edit');
Route::patch('/editPerfil/{user}', 'PerfilController@update');

Route::get('/perfil', 'PublicationController@index');
Route::get('/perfil/new', 'PublicationController@create');
Route::post('/perfil', 'PublicationController@store');
Route::get('/perfil/{publication}/edit', 'PublicationController@edit');
Route::patch('/perfil/{publication}', 'PublicationController@update');
Route::delete('/perfil/{publication}', 'PublicationController@destroy');

// Route::get('/resultados', 'BuscadorController@resultados');
// <form  action="/posts/{{$post->id}}" method="POST">
//   @csrf
//   {{method_field('PATCH')}}
//   <div class="form-group">
//     <textarea class="form-control estilotextarea" name="description" id="FormControlTextarea" rows="3" cols="60" placeholder="Agrega un comentario...">{{old('description',$post->description)}}</textarea>
//   </div>
//   <button class="bottoncomentario" type="submit">Enviar</button>
// </form>
