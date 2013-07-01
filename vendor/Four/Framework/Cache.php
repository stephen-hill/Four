<?php

namespace Four\Framework
{
	use \DateTime;
	
	class Cache
	{
		// Fields
		private $_cache;
		
		// Constructor
		public function __construct($cache)
		{
			$this->_cache = $cache;
		}
		
		// Public Methods
		public function Get($key)
		{
			return $this->_cache->get($key);
		}
		
		public function Set($key, $data, DateTime $expires)
		{
			return $this->_cache->set()
		}
	}
}