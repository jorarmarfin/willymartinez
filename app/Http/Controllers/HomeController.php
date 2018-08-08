<?php

namespace App\Http\Controllers;

use App\Mail\ContactEmail;
use App\Repositories\Drupal;
use Carbon\Carbon;
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
        $configuracion = $this->drupal->getRequest($this->iduser,'configuracion',false);
        $datos = $this->drupal->getRequest($this->iduser,'datos-personales',false);
        $datos->edad = Carbon::createFromFormat('Y-m-d',$datos->fecha_nacimiento)->age;
        $redes= $this->PreparaRedes($datos->redes_sociales);
        $experiencia = $this->drupal->getRequest($this->iduser,'experiencia',true);
        $educacion = $this->drupal->getRequest($this->iduser,'educacion',true);
        $habilidades = $this->drupal->getRequest($this->iduser,'habilidades',true);
        $idiomas = $this->drupal->getRequest($this->iduser,'idiomas',true);
        $archivo = $this->drupal->getRequest($this->iduser,'archivo',false);
        //$portafolio = $this->drupal->getRequest($this->iduser,'portafolio',true);

        return view('index',compact('configuracion','datos','experiencia','educacion','habilidades','redes','idiomas','archivo'));
    }
    public function PreparaRedes($misredes)
    {
        $redes_sociales = explode('<br />',$misredes);
        $redes = [];
        $i = 0;
        foreach ($redes_sociales as $key => $item) {
            $puntero = strpos($item,'|',1);
            $red = trim(substr($item,0,$puntero));
            $slug = str_slug($red);
            $vinculo = substr($item,$puntero+1,strlen($item)-$puntero);

            array_push($redes,['red'=>$red,'vinculo'=>$vinculo,'slug'=>$slug]);
            $i++;
        }
        return $redes;
    }
    public function sendemail(Request $request)
    {
        /*
        MAIL_DRIVER=smtp
        MAIL_HOST=mail.smtp2go.com
        MAIL_PORT=2525
        MAIL_USERNAME=curriculum
        MAIL_PASSWORD=YmJpeHJkNXhsY2ow
        MAIL_ENCRYPTION=tls
        MAIL_FROM_ADDRESS=mycurriculum@sahost.com.pe
        MAIL_FROM_NAME='My Curriculum'
         */
    	/*Envio de Email*/
        $datos = $request->all();
        Mail::to('luis.mayta@gmail.com','Luis Mayta')
                ->send(new ContactEmail($datos));
        return redirect()->route('home.index');
    }
}
