<?

namespace Four\Core
{
	use ErrorException;
	use InvalidArgumentException;
	
	class Route
	{
		private $_pattern = [];
		private $_parameters = []
		
		public function __construct(array $args)
		{
			// $arguments must be an array
			if (is_array($args) === false)
			{
				throw new InvalidArgumentException("\$args must be an array.");
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