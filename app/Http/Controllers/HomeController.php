<?php

namespace App\Http\Controllers;

use App\Mail\ContactEmail;
use App\Repositories\Drupal;
use App\Repositories\Youtube;
use Illuminate\Http\Request;
use Styde\Html\Facades\Alert;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\FormContactRequest;

class HomeController extends Controller
{
    private $drupal;
    private $youtube;
    
	public function __construct(Drupal $drupal, Youtube $youtube)
	{
		$this->drupal = $drupal;
		$this->youtube = $youtube;
	}

	public function index()
	{
		$mensaje = $this->drupal->getRequest('mensajes',false);
		$productos = $this->drupal->getRequest('productos-portada',true);
		$eventos = $this->drupal->getRequest('eventos-portada',true);
		$blog = $this->drupal->getRequest('blog-portada',true);
		$biografia = $this->drupal->getRequest('nid',false,3);
		$frases[0] = $this->drupal->getRequest('nid',false,5);
		$frases[1] = $this->drupal->getRequest('nid',false,6);
		$current = "inicio";
		$videos = $this->youtube->getVideosPortada(5); #$videos[0]['snippet']['publishedAt']
		return view('index',compact('mensaje','productos','biografia','frases','eventos','blog','current','videos'));
	}
	public function productos()
	{
		$p_estrella = $this->drupal->getRequest('producto-destacado',false);
		$productos = $this->drupal->getRequest('productos',true);
		$current = "productos";
		return view('productos',compact('p_estrella','productos','current'));
	}
	public function producto($nid)
	{
		$producto = $this->drupal->getRequest('nid',false,$nid);
		$current = "productos";
		return view('producto',compact('producto','current'));
	}
	public function biografia()
	{
		$biografia[0] = $this->drupal->getRequest('nid',false,15);
		$biografia[1] = $this->drupal->getRequest('nid',false,16);
		$biografia[2] = $this->drupal->getRequest('nid',false,17);
		$biografia[3] = $this->drupal->getRequest('nid',false,18);
		$biografia[4] = $this->drupal->getRequest('nid',false,19);
		$current = "bio";
		return view('biografia',compact('biografia','current'));
	}
	public function eventos()
	{
		$eventos = $this->drupal->getRequest('eventos',true);
		$current = "eventos";
		return view('eventos',compact('eventos','current'));
	}
	public function blog()
	{
		$blog = $this->drupal->getRequest('blog',true);
		$current = "blog";
		return view('blog',compact('blog','current'));
	}
	public function contactame()
	{
		$contacto = $this->drupal->getRequest('nid',false,20);
		$current = "contactame";
		return view('contactame',compact('contacto','current'));
	}
	public function email(FormContactRequest $request)
	{
		$datos = $request->all();
		Mail::to('cristoestavivo@hotmail.com','Informacion')
				->send(new ContactEmail($datos));
		
		Alert::info('Su email ha sido enviado; me pondre en contacto con Ud.');
		return redirect()->back();
		
	}
	public function canalyoutube()
	{
		$videos = $this->youtube->getVideos();
		dd($videos);
	}
	public function pedido(Request $request)
	{
		$data = $request->all();
		$url = $this->drupal->getUrl();
		#dd($data);
		$pedido = [
			'title' => [['value' => $request->nombre]],
			'body' => [['value' => $request->descripcion]],
			'field_email' => [['value' => $request->email]],
			'field_cantidad' => [['value' => $request->cantidad]],
			'field_telefono' => [['value' => $request->telefono]],
			'field_token' => [['value' => $request->_token]],
			'field_producto' => [['value' => $request->nid]],
			'_embedded'=>[
				"$url/rest/relation/node/pedidos/field_producto"=> [
					[
					  "_links" => [
						"self" => [
						  "href" => "$url/node/$request->nid?_format=hal_json"
						],
						"type" => [
						  "href" => "$url/rest/type/node/productos"
						]
					  ],
					  "uuid" => [
						[
						  "value" => "$request->uuid"
						]
					  ]
					]
				  ]
				]
		];
		// 'nid' => [['value' => $request->nid]],
		//dd($pedido);
		//204 -> delete
		//201 -> create
		#	dd($this->drupal->getUrl());
		$result = $this->drupal->postRequest('create',$pedido,$request->nid);
		$mensaje = ($result=='201') ? 'Su Pedido se ha registrado nos pondremos en contacto con usted para el depósito' : 'Ocurrio un Problema comuniquese con el administrador' ;
		Alert::info($mensaje);
		return redirect()->back();
	}
	
}
