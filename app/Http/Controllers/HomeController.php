<?php

namespace App\Http\Controllers;

use App\Repositories\Curriculum;

use Illuminate\Http\Request;

class HomeController extends Controller
{
	private $curriculum;

	public function __construct(Curriculum $curriculum)
	{
		$this->curriculum = $curriculum;
	}

    public function index()
    {
    	$datos = $this->curriculum->getMyData();
    	return view('index',compact('datos'));
    }
}
