<?php

namespace Four\Framework
{
	class Database
	{
		public $Cache; #Cache
		
		public function Get($table, $parameters)
		{
			$key = $table . $this->hash($parameters);
			$cache = $this->Cache->Get($key);
			
			if ($cache !== null)
			{
				return $cache;
			}
			else
			{
				// Execute SQL Statement
			}
		}
		
		private function hash($array)
		{
			array_multisort($array);
			return md5(json_encode($array));
		}
	}
}