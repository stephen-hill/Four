<?php

namespace Four\Core
{
	class Autoload
	{
		// Static Fields
		public static $Directory = "";
		
		// Static Methods
		public static function Autoload($class)
		{
			// Replace underscores and namespace seperators with directory seperators
			$file = str_replace("_", DIRECTORY_SEPARATOR, $class);
			$file = str_replace("\\", DIRECTORY_SEPARATOR, $file);
			$file = self::$Directory . DIRECTORY_SEPARATOR . $file . ".php";
			
			if (file_exists($file) === true)
			{
				require_once($file);
			}
		}

		public static function Register()
		{
			// Set the autoload search directory
			self::$Directory = realpath(dirname(__FILE__) . '/../..');
			
			// Register the autoloader
			spl_autoload_register
			(
				__NAMESPACE__ . "\\Autoload::Autoload",
				true,
				false
			);
		}
	}
}