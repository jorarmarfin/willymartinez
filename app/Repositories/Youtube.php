<?php

namespace App\Repositories;

/**
* Clase de conexion con drupal
*/
class Youtube
{
	private $obj;
	private $key;
	private $channel;

	public function __construct()
	{
        $this->key = env('API_KEY_YOUTUBE');
		$this->channel = env('ID_CHANNEL');
		$url = "https://www.googleapis.com/youtube/v3/search?key=$this->key&channelId=$this->channel&part=snippet,id&order=date&maxResults=9";
		$json = file_get_contents($url);
		$this->obj = json_decode($json, true);
	}
	public function getVideosPortada($cnt)
	{
		$url = "https://www.googleapis.com/youtube/v3/search?key=$this->key&channelId=$this->channel&part=snippet,id&order=date&maxResults=$cnt";
		$json = file_get_contents($url);
		$this->obj = json_decode($json, true);
        return $this->obj['items'];
	}
	public function getVideos()
	{
        $videos = $this->obj['items'];
		return $videos;
	}
}