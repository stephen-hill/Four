<?php

namespace Four\Web
{
	class HttpRequest
	{
		public $Get;
		public $Post;
		public $Files;
		public $Server;
		public $Cookies;
		
		public function __construct($get, $post, $files, $server, $cookies)
		{
			$this->Get = $get;
			$this->Post = $post;
			$this->Files = $files;
			$this->Server = $server;
			$this->Cookies = $cookies;
		}
	}
}