<?php

namespace Four\Framework
{
	class File
	{
		public static function Exists($filepath)
		{
			return file_exists($filepath);
		}
	}
}