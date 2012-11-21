<?

namespace Four
{
	class Route
	{
		private $_pattern; #String

		public function __construct($arguments)
		{
			// $arguments must be an array
			if (is_array($arguments) === false)
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
				if (false === isset($arguments[$parameter]) && empty($arguments[$parameter]))
				{
					throw new \Exception("{$parameter} not specified.");
				}
			}


		}
	}
}