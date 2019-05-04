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
//rutas del front o de la raiz
Route::group(["prefix" => "/"], function () {

    Route::get('/', "FrontController@index");

    Route::get('contacto', [
        "as"   => "conctacto",
        "uses" => "FrontController@contacto",
    ]);
    Route::get('reviews', [
        "as"   => "reviews",
        "uses" => "FrontController@reviews",
    ]);

});

//rutas de privadas
Route::group(["middleware" => "auth"], function () {

    Route::get('admin', "FrontController@admin");
    //rutas de usuario
    Route::resource("usuario", "UsuarioController");
    Route::get("usuario/{id}/destroy", "UsuarioController@destroy");
    //rutas de generos
    Route::resource("genero", "GeneroController");
    Route::get("generos", "GeneroController@listaGenero");
    //rutas de peliculas
    Route::resource("movie", "MovieController");

});

//rutas de login
Route::post("login", "LogController@login")->name("login");
//ruta de cerrar seccion
Route::post("logout", "LogController@logout")->name("logout");

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
