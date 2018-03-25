<?php

namespace App\Repositories;

use GuzzleHttp\Client;
/**
* Clase de conexion con drupal
*/
class Curriculum
{
	private $client;

	public function __construct()
	{
		$this->client = new Client([
			'base_uri' => 'http://admin.curriculum.sahost.com.pe'
		]);
	}

	public function getMyData($id)
	{
		return $this->getRequest('/api/'.$id.'/mydata')[0];
	}
	public function getMyConfiguration($id)
	{
		return $this->getRequest('/api/'.$id.'/configuracion')[0];
	}

	public function getRequest($uri,$type='GET')
	{
		$response = $this->client->request($type,$uri);
		return json_decode($response->getBody()->getContents());
	}
}
