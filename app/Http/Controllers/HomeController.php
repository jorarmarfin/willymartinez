<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class HomeController extends Controller
{
	private $client;

	public function __construct()
	{
		$this->client = new Client([
			'base_uri' => 'https://myapp.com/api/'
		]);
	}


    public function index()
    {
    	$client = new Client();
    	return view('index');
    }
}
