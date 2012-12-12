<?

namespace Four\Core
{
	use Four\Web\HttpPostedFile;
	
	class Kernel
	{
		// Constants
		const VERSION = "1.0";
		const MAJOR_VERSION = 1;
		const MINOR_VERSION = 0;
		
		// Public Fields
		public static $Routes = array();

		// Public Methods
		public static function Boot()
		{
			// Register the autoloader
			require_once(__DIR__ . "/Autoload.php");
			Autoload::Register();
			
			// Add the default route
			$ExampleRoute = new Route(array(
				"Pattern" => "/{Controller}/{Action}/{Id}",
				"Controller" => "PageController",
				"Namespace" => "/",
				"Defaults" => array(
					"Controller" => "Home",
					"Action" => "Index",
					"Id" => null
				)
			));
		}
	}
}