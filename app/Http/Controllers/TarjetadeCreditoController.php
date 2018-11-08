<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

use Illuminate\Http\Request;

class TarjetadeCreditoController extends Controller
{
    public function show($id){ 	

	    $client = new Client([
	    // Base URI is used with relative requests
	    'base_uri' => 'http://apifintech-team1.3it.cl/hackathon/credit-card/',
	    // You can set any number of default request options.
	]);

		$response = $client->request('GET', "{$id}");

		$post = json_decode($response->getBody()->getContents() );
		return view('desafio.tarjetadecredito', compact('post'));
	}
}
