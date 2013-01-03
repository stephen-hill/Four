<?php

namespace Four\Framework
{
	use Four\Web\HttpRequest;
	
	class Application
	{
		const VERSION = "1.0";
		const MAJOR_VERSION = 1;
		const MINOR_VERSION = 0;
		
		public static $Routes = new RouteCollection();
		public static $Request;
		
		public static Init()
		{
			// Register the autoloader
			require_once(__DIR__ . "/Autoload.php");
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