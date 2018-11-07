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
		$productos = $this->drupal->getRequest('productos',true);
		$biografia = $this->drupal->getRequest('nid',false,3);
		return view('index',compact('mensaje','productos','biografia'));
	}
	
}
