<?php

namespace Four\Web
{
	class Cookie
	{
		public $Name;
		public $Value;
		public $Expires;
		public $Domain;
		public $Path;
		public $Secure;
		public $HttpOnly;
		
		public $EncryptedName;
		public $EncryptedValue;
		
		public function __construct($name, $value, DateTime $expires = null, $path = null, $domain = null, $secure = false, $httponly = true)
		{
			$this->EncryptedName = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, "", $name, MCRYPT_MODE_CBC, "");
			$this->EncryptedValue = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, "", $value, MCRYPT_MODE_CBC, "");
			
			$this->Name = $name;
			$this->Value = $value;
			$this->Expires = $expires;
			$this->Path = $path;
			$this->Domain = $domain;
			$this->Secure = $secure;
			$this->HttpOnly = $httponly;
		}
	}
}