<?php

namespace Four\Framework
{
	use Four\Web\HttpRequest;
	
	class Application
	{
		public static $Routes = new RouteCollection();
		public static $Request;
		
		public static __constuct()
		{
			self::$Request = new HttpRequest($_GET, $_POST, $_FILES, $_SERVER, $_COOKIES);
		}
	}
}