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
        $this->key = 'AIzaSyCYM3b7JGxLuD841LkCyro4TzgkNa1q_xw';
		$this->channel = 'UCIZaTImyKAI5YUXrhPvNhiw';
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