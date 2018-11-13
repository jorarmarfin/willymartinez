<?php

namespace App\Repositories;

/**
* Clase de conexion con drupal
*/
class Youtube
{
	private $obj;

	public function __construct()
	{
        $key = 'AIzaSyCYM3b7JGxLuD841LkCyro4TzgkNa1q_xw';
		$channel = 'UCIZaTImyKAI5YUXrhPvNhiw';
		$url = "https://www.googleapis.com/youtube/v3/search?key=$key&channelId=$channel&part=snippet,id&order=date&maxResults=9";
		$json = file_get_contents($url);
		$this->obj = json_decode($json, true);
		
	}

	public function getVideos()
	{
        $videos = $this->obj['items'];
		return $videos;
	}
}