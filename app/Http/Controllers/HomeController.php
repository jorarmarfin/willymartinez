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
		$eventos = $this->drupal->getRequest('eventos-portada',true);
		$blog = $this->drupal->getRequest('blog-portada',true);
		$biografia = $this->drupal->getRequest('nid',false,3);
		$frases[0] = $this->drupal->getRequest('nid',false,5);
		$frases[1] = $this->drupal->getRequest('nid',false,6);
		$current = "inicio";
		return view('index',compact('mensaje','productos','biografia','frases','eventos','blog','current'));
	}
	public function productos()
	{
		$p_estrella = $this->drupal->getRequest('producto-destacado',false);
		$productos = $this->drupal->getRequest('productos',true);
		$current = "productos";
		return view('productos',compact('p_estrella','productos','current'));
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
		$blog = $this->drupal->getRequest('blog',true);
		$current = "contactame";
		return view('contactame',compact('blog','current'));
	}
	
}
