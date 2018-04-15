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

	public function getRequest($id,$name,$isarray=false,$type='GET')
	{
		$url = '/api/'.$id.'/'.$name;
		$response = $this->client->request($type,$url);

		$data = json_decode($response->getBody()->getContents());

		if($isarray)return $data[0];
		else return $data;
	}
}
