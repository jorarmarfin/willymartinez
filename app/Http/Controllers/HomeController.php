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
    	$experiencia = $this->curriculum->getMyExperiencia($this->iduser);
    	$llave = '';
    	foreach ($experiencia as $key => $value) {
    		if ($value->destacar == 1) {
    			$llave = $key;
    		}
    	}
    	$exp_des = $experiencia[$llave];

    	return view('index',compact('datos','configuracion','experiencia','exp_des'));
    }
}
