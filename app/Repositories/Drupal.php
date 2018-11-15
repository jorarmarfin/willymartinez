<?php

namespace App\Repositories;

use GuzzleHttp\Client;
/**
* Clase de conexion con drupal
*/
class Drupal
{
	private $client;

	public function __construct()
	{
		$this->client = new Client([
			'base_uri' => 'http://intranet.willymartinezsanchez.com',
			'auth' => ['apirest', '35@C-5-:Wv-oEdre2(/Z']
		]);
	}

	public function getRequest($name,$isarray=false,$nid=null)
	{
		$retVal = ($name=='nid') ? '/'.$nid : '' ;
		$sufijo = $retVal.'?_format=json';
		$url = '/api/'.$name.$sufijo;
		$response = $this->client->request('GET',$url);

		$data = json_decode($response->getBody()->getContents());

		if($isarray)return $data;
		else return $data[0];
	}
}