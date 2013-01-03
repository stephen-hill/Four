<?php

namespace Four\Framework
{
	class Controller
	{
		// Private Fields
		private $_request = null;
		private $_response = null;
		
		// Magic Methods
		public function __get($name)
		{
			// Convert to private name
			$private = "_" . lcfirst($name);
			
			if (isset($this->{$private}) === true)
			{
				return $this->{$private};
			}
			else
			{
				throw new ErrorException("The property {$name} doesn't exist.");
			}
		}
		
		public function __set($name, $value)
		{
			// Convert to private name
			$private = "_" . lcfirst($name);
			
			$this->{$private} = $value;
		}
	}
}