<?php

namespace App\Http\Controllers;

use App\Mail\OrderEmail;
use App\Mail\ContactEmail;
use App\Repositories\Drupal;
use Illuminate\Http\Request;
use App\Repositories\Youtube;
use Styde\Html\Facades\Alert;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\DescargaRequest;
use App\Http\Requests\OrderFormRequest;
use Illuminate\Support\Facades\Storage;
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
		$videos = $this->youtube->getVideosPortada(4); 
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
	public function post($nid)
	{
		$post = $this->drupal->getRequest('nid',false,$nid);
		$current = "blog";
		return view('post',compact('post','current'));
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
	public function pedido(OrderFormRequest $request)
	{
		$data = $request->all();
		$url = $this->drupal->getUrl();
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
		$result = $this->drupal->postRequest('create',$pedido,$request->nid);
		if ($result=='201') {
			$mensaje = 'Su Pedido se ha registrado nos pondremos en contacto con usted para el depósito';
			Mail::to('cristoestavivo@hotmail.com','Informacion')->cc($request->email,'Pedido')->send(new OrderEmail($data));
		}else{
			$mensaje = 'Ocurrio un Problema comuniquese con el administrador';
		}
		Alert::info($mensaje);
		return redirect()->back();
	}
	public function descargas()
	{
		$current = "descargas";
		return view('descargas',compact('current'));
	}
	public function lista(DescargaRequest $request)
	{
		$despacho = $this->drupal->getRequest('despacho',true,$request->codigo);
		if (count($despacho)==0) {
			Alert::error('El codigo escrito no es correcto.');
		}
		$current = "descargas";
		return view('descargas',compact('current','despacho'));
	}
	public function archivo($token = '')
	{
		$despacho = $this->drupal->getRequest('despacho',true,$token);
		$permiso = true;

		if (count($despacho)==0) {
			$mensaje = 'Ingreso un codigo no invalido.';
			$permiso = false;
		}else{
			if($despacho[0]->pago!='Si' || $despacho[0]->fecha_limite<date('d-m-Y')){
				$mensaje = 'El codigo escrito ya no esta disponible para descarga.';
				$permiso = false;
			}
		}
		if($permiso){
			return Storage::disk('s3')->download($despacho[0]->enlace);
		}else{
			Alert::error($mensaje);
			$current = "descargas";
			return view('descargas',compact('current'));
		}

	}
	public function template()
	{
		return view('emails.pedido');
	}
	
}
