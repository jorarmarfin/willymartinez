<?php

namespace App\Http\Controllers;

use App\Mail\ContactEmail;
use App\Repositories\Drupal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
	private $drupal;
	private $iduser;

	public function __construct(Drupal $drupal)
	{
		$this->drupal = $drupal;
		$this->iduser = 1;
	}

    public function index()
    {
/*    	$datos = $this->curriculum->getRequest($this->iduser,'mydata',true);
        $experiencia = $this->curriculum->getRequest($this->iduser,'experiencia');
        $educacion = $this->curriculum->getRequest($this->iduser,'educacion');
        $habilidades = $this->curriculum->getRequest($this->iduser,'habilidades');
        $idiomas = $this->curriculum->getRequest($this->iduser,'idiomas');
        $llave = '';
        foreach ($experiencia as $key => $value) {
            if ($value->destacar == 1) {
                $llave = $key;
            }
        }
        $exp_des = $experiencia[$llave];*/
        /*$datos = [];
        $experiencia = [];
        $educacion = [];
        $habilidades = [];
        $idiomas = [];
        $exp_des = [];*/
        $configuracion = $this->drupal->getRequest($this->iduser,'configuracion',false);
    	$datos = $this->drupal->getRequest($this->iduser,'datos-personales',false);

    	return view('index',compact('configuracion','datos'));
    }
    public function sendemail(Request $request)
    {
    	/*Envio de Email*/
        $datos = $request->all();
        Mail::to('luis.mayta@gmail.com','Luis Mayta')
                ->send(new ContactEmail($datos));
        return redirect()->route('home.index');
    }
}
