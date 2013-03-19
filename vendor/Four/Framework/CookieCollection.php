<?php

namespace Four\Web
{
	class CookieCollection
	{
		private $_collection = array();
		
		public static function Set(Cookie $cookie)
		{
			$this->_collection[$cookie->Name] = $cookie;
		}
		
		public static function Get($name)
		{
			if (isset($this->_collection[$name]) === true)
			{
				return $this->_collection[$name];
			}
			
			throw new Exception("Cookie not found.");
		}
		
		public function __dustruct()
		{
			foreach ($this->_collection as $cookie)
			{
				setcookie(
					$cookie->EncryptedName,
					$cookie->EncryptedValue,
					$cookie->Expires->getTimestamp(),
					$cookie->Path,
					$cookie->Domain,
					$cookie->Secure,
					$cookie->HttpOnly
				);
			}
		}
	}
}