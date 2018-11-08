<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

use Illuminate\Http\Request;

class TransaccionesController extends Controller
{
    public function show($id){ 	

	    $client = new Client([
	    // Base URI is used with relative requests
	    'base_uri' => 'http://apifintech-team1.3it.cl/hackathon/tef/history/',
	    // You can set any number of default request options.
	]);

		$response = $client->request('GET', "{$id}");

		$post = json_decode($response->getBody()->getContents() );
		$contador_ingreso = 0;
		$contador_egreso = 0;

		foreach ($post as $p) {
			if (strcmp($p->type, 'INGRESO')) {
				$contador_ingreso = $contador_ingreso + $p->amount;
			}
			if (strcmp($p->type, 'EGRESO')) {
				$contador_egreso = $contador_egreso + $p->amount;
			}
		}
		return view('desafio.transacciones', compact('post','contador_ingreso','contador_egreso'));
	}
}
