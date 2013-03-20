<?php

namespace Four\Framework
{
	class CookieCollection
	{
		private $_collection = array();

		public function __construct($map = array())
		{
			foreach ($map as $key => $value)
			{
				$this->_collection = new Cookie($key, $value);
			}
		}
		
		public function Add(Cookie $cookie)
		{
			$this->_collection[$cookie->Name] = $cookie;
		}
		
		public function Get($name)
		{
			if (isset($this->_collection[$name]) === true)
			{
				return $this->_collection[$name];
			}
			
			throw new Exception("Cookie not found.");
		}

		public function Remove($name)
		{
			unset($this->_collection[$name]);
		}
	}
}