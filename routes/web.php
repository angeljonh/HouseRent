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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/propiedades', 'PropiedadController@propiedad')->name('propiedad');
Route::get('/inicio', 'PropiedadController@inicio')->name('inicio');
Route::get('/inicioo', 'PropiedadController@inicioo')->name('inicioo');
Route::get('/acerca', 'PropiedadController@acerca')->name('acerca');
Route::get('/blog', 'PropiedadController@blog')->name('blog');
Route::get('/contacto', 'PropiedadController@contacto')->name('contacto');

Route::resource('propiedad', 'PropiedadController');
