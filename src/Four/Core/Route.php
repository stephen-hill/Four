<?

namespace Four\Core
{
	use ErrorException;
	
	class Route
	{
		private $Paramters = array();
		
		public function __construct($Arguments)
		{
			// $arguments must be an array
			if (is_array($Arguments) === false)
			{
				throw new ErrorException("\$arguments must be an array.");
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
					throw new ErrorException("{$parameter} not specified.");
				}
			}

			// Find parameters in the pattern
			$parameters = array();
			preg_match_all('|{[A-z]+}|', $Arguments["Pattern"], $parameters, PREG_OFFSET_CAPTURE | PREG_PATTERN_ORDER);
			
			if (count($parameters) > 0)
			{
				
			}
		}
	}
}