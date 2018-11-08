<?php

namespace App\Http\Controllers;

use App\Repositories\Drupal;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $drupal;
    
	public function __construct(Drupal $drupal)
	{
		$this->drupal = $drupal;
	}

	public function index()
	{
		$mensaje = $this->drupal->getRequest('mensajes',false);
		$productos = $this->drupal->getRequest('productos-portada',true);
		$eventos = $this->drupal->getRequest('eventos',true);
		$biografia = $this->drupal->getRequest('nid',false,3);
		$frases[0] = $this->drupal->getRequest('nid',false,5);
		$frases[1] = $this->drupal->getRequest('nid',false,6);
		$current = "inicio";
		return view('index',compact('mensaje','productos','biografia','frases','eventos','current'));
	}
	public function productos()
	{
		$p_estrella = $this->drupal->getRequest('producto-destacado',false);
		$productos = $this->drupal->getRequest('productos',true);
		$current = "productos";
		return view('productos',compact('p_estrella','productos','current'));
	}
	
}
