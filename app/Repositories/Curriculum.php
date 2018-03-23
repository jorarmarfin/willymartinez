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


	public function getMyData()
	{
		$response = $this->client->request('GET','/api/mydata');
		return json_decode($response->getBody()->getContents())[0];

	}
}
