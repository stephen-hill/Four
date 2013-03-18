<?php

namespace Four\Web
{
	class HttpCookie
	{
		public $Name;
		public $Value;
		
		private $_name;
		private $_value;
		
		public function __construct($name, $value)
		{
			$this->_name = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, "sdlkfjsldkfjlksdjflksdflksdflkj", $name, MCRYPT_MODE_CBC, "asdasdasdasdasd");
			$this->_value = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, "sdlkfjsldkfjlksdjflksdflksdflkj", $value, MCRYPT_MODE_CBC, "asdasdasdasdasd");
			
			$this->Name = $name;
			$this->Value = $value;
		}
	}
}