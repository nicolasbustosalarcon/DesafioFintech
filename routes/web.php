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

route::get('/usuarios','PostsController@index');

route::resource('usuario','PostsController');
route::get('/usuarios/{rut}','PostsController@show');

route::resource('/transacciones','TransaccionesController');

route::resource('/tarjetadecredito','TarjetadeCreditoController');


Route::get('/inicio', function () {
    return view('inicio.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
