<?php

namespace App\Repositories;

use GuzzleHttp\Client;
/**
* Clase de conexion con drupal
*/
class Drupal
{
	private $url;
	private $client;

	public function __construct()
	{
		$this->url= 'http://intranet.willymartinezsanchez.com';
		$this->client = new Client([
			'base_uri' => $this->url,
			'auth' => ['apirest', '35@C-5-:Wv-oEdre2(/Z']
		]);
	}

	public function getRequest($name,$isarray=false,$nid=null)
	{
		$retVal = ($name=='nid' || $name=='galeria') ? '/'.$nid : '' ;
		$sufijo = $retVal.'?_format=json';
		$url = '/api/'.$name.$sufijo;
		$response = $this->client->request('GET',$url);

		$data = json_decode($response->getBody()->getContents());

		if($isarray)return $data;
		else return $data[0];
	}
	public function postRequest()
	{
		$mensaje='
			{
				"_links":{
					"type":{
						"href":"http://mydrupal.test/rest/type/node/pedidos"
					}
				},
				"title":[{"value":"tarea prueba 5"}],
				"body":[{"value":"tarea de prueba 5"}]
			
			}
		';
		//$this->client->post();
		$response = $this->client->post('/entity/node', array('body' => json_encode($mensaje)));
 
		$httpStatusCode = $response->getStatusCode();
		$result = $response->json();
		dd($result);
	}
}
