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
	public function postRequest($action='create',$nid=0)
	{
		$url = $this->url;
		$serialized_entity = json_encode([
			'_links' => ['type' => [
				'href' => $url.'/rest/type/node/pedidos'
			]],
			'title' => [['value' => 'laravel titulo4']],
			'body' => [['value' => 'laravel cuerpo4']],
		  ]);
		switch ($action) {
			case 'create':
				$response = $this->client->post(
					'/node?_format=hal_json', 
					[
						'body' => $serialized_entity,
						'headers' => [
							'Content-Type' => 'application/hal+json',
						]
					]
				);
				break;
			case 'delete':
				$response = $this->client->delete(
					"/node/$nid?_format=hal_json", 
					[
						'headers' => [
							'Content-Type' => 'application/hal+json',
						]
					]
				);
				break;
			default:
				# code...
				break;
		}
		#dd($response);
		dd($response->getStatusCode());
	}
}
