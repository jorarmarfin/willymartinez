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
	public function getUrl()
	{
		return $this->url;
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
	public function postRequest($action='create',$data=[],$nid=0)
	{
		$url = $this->url;
		$serialized_entity = json_encode([
			'_links' => [
				'type' => ['href' => $url.'/rest/type/node/pedidos'],
				"http://intranet.willymartinezsanchez.com/rest/relation/node/pedidos/field_producto"=> [
					["href"=>"http://intranet.willymartinezsanchez.com/node/37?_format=hal_json"]
				]
			],
			'title' => [['value' => 'laravel titulo4']],
			'body' => [['value' => 'laravel cuerpo4']],
			'_embedded'=>[
				"http://intranet.willymartinezsanchez.com/rest/relation/node/pedidos/field_producto"=> [
					[
					  "_links" => [
						"self" => [
						  "href" => "http://intranet.willymartinezsanchez.com/node/37?_format=hal_json"
						],
						"type" => [
						  "href" => "http://intranet.willymartinezsanchez.com/rest/type/node/productos"
						]
					  ],
					  "uuid" => [
						[
						  "value" => "b7afe06e-e01d-4e5e-b45f-7768f240474a"
						]
					  ]
					]
				  ]
				]
		  ]);
		$serialized_entity = array_add($data,'_links' , [
			'type' => ['href' => $url.'/rest/type/node/pedidos'],
			$url.'/relation/node/pedidos/field_producto'=>['href'=>$url.'/node/'.$nid.'?_format=hal_json']
			]);
		$serialized_entity = json_encode($serialized_entity);
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
		return $response->getStatusCode();
	}
}
