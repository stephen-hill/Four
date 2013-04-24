<?php

namespace Four\Framework
{
	class Events
	{
		private static $_events;
		
		public static function Add($name, $function)
		{
			self::$_events[$name][] = $function;
		}
		
		public static function Fire($name)
		{
			foreach(self::$_events[$name] as $event)
			{
				$event();
			}
		}
	}
}