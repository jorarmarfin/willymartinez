<?php

namespace App\Http\Controllers;

use App\Repositories\Curriculum;

use Illuminate\Http\Request;

class HomeController extends Controller
{
	private $curriculum;
	private $iduser;

	public function __construct(Curriculum $curriculum)
	{
		$this->curriculum = $curriculum;
		$this->iduser = 1;
	}

    public function index()
    {
    	$datos = $this->curriculum->getMyData($this->iduser);
    	$configuracion = $this->curriculum->getMyConfiguration($this->iduser);
    	return view('index',compact('datos','configuracion'));
    }
}
