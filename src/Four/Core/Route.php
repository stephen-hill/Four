<?

namespace Four\Core
{
	class Route
	{
		private $Variables = array();
		
		public function __construct($Arguments)
		{
			// $arguments must be an array
			if (is_array($Arguments) === false)
			{
				throw new \Exception("\$arguments must be an array.");
			}

			// Check for the required parameters
			$requiredParameters = array
			(
				"Pattern", "Controller"
			);
			foreach ($requiredParameters as $parameter)
			{
				if (false === isset($Arguments[$parameter]) && empty($Arguments[$parameter]))
				{
					throw new \Exception("{$parameter} not specified.");
				}
			}

			// Find variables in the pattern
			preg_match_all('|{[A-z]+}|', $Arguments["Pattern"], $this->Variables, PREG_OFFSET_CAPTURE | PREG_PATTERN_ORDER);
			
			var_dump($this->Variables);
		}
	}
}