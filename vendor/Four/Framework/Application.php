<?php

namespace Four\Framework
{
	use \ArrayObject;
	
	class Application
	{
		private $_cookies;
		private $_files;
		private $_gets;
		private $_posts;
		private $_server;
		
		private $_events;
		
		public function __construct($cookies, $files, $gets, $posts, $server)
		{
			$this->_cookies = new ArrayObject($cookies);
			$this->_files = new ArrayObject($files);
			$this->_gets = new ArrayObject($gets);
			$this->_posts = new ArrayObject($posts);
			$this->_server = new ArrayObject($server);
			
			$this->_events = new ArrayObject();
		}
		
		public function Start()
		{
			Events::Fire('beforeStart');
			
			// 
			
			$this->FireEvent('afterStart');
		}
		
		// Events
		public function AddEvent($name, $function)
		{
			if (is_string($name) === false)
			{
				throw new Exception("\$name must be a string.");
			}
			
			if (is_callable($function) === false)
			{
				throw new Exception("\$function is not callable.");
			}
			
			$this->_events[] = array($name => $function);
		}
		
		private function FireEvent($name)
		{
			if (is_string($name) === false)
			{
				throw new Exception("\$name must be a string.");
			}
			
			foreach ($this->_events as $event)
			{
				if (key($event) === $name)
				{
					$event[$name]();
				}
			}
		}
	}
}