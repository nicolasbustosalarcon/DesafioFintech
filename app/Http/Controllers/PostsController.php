<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

use Illuminate\Http\Request;

class PostsController extends Controller
{

	public function index(Request $request){ 		

		//dd($request->get('rut'));
	    $client = new Client([
	    // Base URI is used with relative requests
	    'base_uri' => 'http://apifintech-team1.3it.cl/hackathon/clients/',
	    // You can set any number of default request options.
	]);

		$response = $client->request('GET', 'all');

		$all = json_decode($response->getBody()->getContents() );
		$numero =count($all);

		if ($request)
        {
            $query=trim($request->get('searchText'));//Se obtiene la busqueda por parte del usuario
            foreach($all as $a){
            	if ($a->rut == $query) {
            		$rut = $query;	
            		return view('desafio.busqueda',['rut'=>$rut], compact('all'));
            	}
            }
        }
	    return view('desafio.index', compact('all'));

	}


	public function show($id){ 	

	    $client = new Client([
	    // Base URI is used with relative requests
	    'base_uri' => 'http://apifintech-team1.3it.cl/hackathon/clients/',
	    // You can set any number of default request options.
	]);

		$response = $client->request('GET', "{$id}/products");

		
		$post = json_decode($response->getBody()->getContents() );
		return view('desafio.show', compact('post'));
	}
/*
	public function busqueda($id){
		$client = new Client([
	    // Base URI is used with relative requests
	    'base_uri' => 'http://apifintech-team1.3it.cl/hackathon/',
	    // You can set any number of default request options.
	]);

		$response = $client->request('GET', "clients/{$id}/products}");

		$post = json_decode($response->getBody()->getContents() );

		return view('busqueda.index', compact('post'));

	}

		//http://apifintech-team1.3it.cl/hackathon/clients/204659/products*/
 }