<?php

namespace Four\Framework
{
	use \Directory;
	
	class Autoload
	{
		// Static Fields
		public static $Directories = array();
		
		// Static Methods
		public static function Autoload($class)
		{
			// Replace underscores and namespace seperators with directory seperators
			$file = str_replace("_", DIRECTORY_SEPARATOR, $class);
			$file = str_replace("\\", DIRECTORY_SEPARATOR, $file);
			
			foreach (self::$Directories as $dir)
			{
				$script = $dir->path . DIRECTORY_SEPARATOR . $file . ".php";
				
				if (file_exists($script) === true)
				{
					require_once($script);
					break;
				}
			}
		}

		public static function Register(Directory $directory = null)
		{
			if ($directory !== null)
			{
				self::AddDirectory($directory);
			}
			
			// Register the autoloader
			spl_autoload_register
			(
				__NAMESPACE__ . "\\Autoload::Autoload",
				true,
				false
			);
		}
		
		public static function AddDirectory(Directory $directory)
		{
			self::$Directories[] = $directory;
		}
	}
}