<?

namespace Four\Framework
{
	use \ErrorException;
	use \InvalidArgumentException;
	
	class Route
	{
		private $_pattern = [];
		private $_parameters = []
		
		public function __construct($key, $url, array $parameters)
		{
			// $url must be a string
			if (is_string($url) === false)
			{
				throw new InvalidArgumentException('Argument $url must be a string.');
			}
			
			// $parameters must be an array
			if (is_array($parameters) === false)
			{
				throw new InvalidArgumentException('Argument $parameters must be an array.');
			}

			// Check for the Pattern key
			if (false === isset($args["Pattern"]))
			{
				throw new ErrorException("Pattern not specified.");
			}
			
			// Find the parameters in the pattern
			preg_match_all('|{[A-z]+}|', $args["Pattern"], $this->_parameters, PREG_OFFSET_CAPTURE | PREG_PATTERN_ORDER);
		}
	}
}