<?php

namespace Four\Framework
{
	class Application
	{
		public static $Routes;
		public static $Request;
		public static $Response;
		public static $Cookies;
		
		public function __construct($globals)
		{
			self::$Request = new Request($_GET, $_POST, $_FILES, $_SERVER, $_COOKIES);
			
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
	}
}