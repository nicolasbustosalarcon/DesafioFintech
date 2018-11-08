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
use GuzzleHttp\Client;


Route::get('/usuario', function () {



	$client = new Client([
    // Base URI is used with relative requests
    'base_uri' => 'http://apifintech-team1.3it.cl/hackathon/clients/',
    // You can set any number of default request options.
]);

	$response = $client->request('GET', 'all');

	$all = json_decode($response->getBody()->getContents() );

    return view('desafio.index', compact('all'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
