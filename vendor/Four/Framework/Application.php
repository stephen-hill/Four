<?php

namespace Four\Framework
{
	use Four\Web\HttpRequest;
	
	class Application
	{
		public static $Routes;
		public static $Request;
		
		public static function Init()
		{
			// Register the autoloader
			require_once __DIR__ . "/Autoload.php";
			Autoload::Register();
			self::$Request = new HttpRequest($_GET, $_POST, $_FILES, $_SERVER, $_COOKIES);
			
			// Add the default route
			// $ExampleRoute = new Route(array(
			// 	"Pattern" => "/{Controller}/{Action}/{Id}",
			// 	"Controller" => "PageController",
			// 	"Namespace" => "/",
			// 	"Defaults" => array(
			// 		"Controller" => "Home",
			// 		"Action" => "Index",
			// 		"Id" => null
			// 	)
			// ));
		}
		
		private function __construct(){}
	}
}