<?php

namespace Four\Framework
{
	use InvalidArgumentException;
	
	class RouteCollection
	{
		private $_routes = [];
		
		public function Add(string $key, Route $route)
		{
			if (is_string($key) === false)
			{
				throw new InvalidArgumentException("\$key must be a string.")
			}
			
			if (get_class($route) !== "Four\\Framework\\Route")
			{
				throw new InvalidArgumentException("\$route must be of class Route.")
			}
			
			if (array_key_exists($key, $this->_routes) === true)
			{
				throw new InvalidArgumentException("The route {$key} has already been defined.");
			}
			
			$_routes[$key] = $route;
		}
	}
}