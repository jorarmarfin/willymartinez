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
    	$datos = $this->curriculum->getRequest($this->iduser,'mydata',true);
    	$configuracion = $this->curriculum->getRequest($this->iduser,'configuracion',true);
    	$experiencia = $this->curriculum->getRequest($this->iduser,'experiencia');
    	$educacion = $this->curriculum->getRequest($this->iduser,'educacion');
    	$habilidades = $this->curriculum->getRequest($this->iduser,'habilidades');
    	$llave = '';
    	foreach ($experiencia as $key => $value) {
    		if ($value->destacar == 1) {
    			$llave = $key;
    		}
    	}
    	$exp_des = $experiencia[$llave];

    	return view('index',compact('datos','configuracion','experiencia','exp_des','educacion','habilidades'));
    }
}
