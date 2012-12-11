<?

namespace Four\Core
{
	class Kernel
	{
		// Constants
		const VERSION = 1.0;
		
		// Public Fields
		public static $Routes = array();

		// Public Methods
		public static function Boot()
		{
			require_once(__DIR__ . "/Autoload.php");
			Autoload::Register();
		}
	}
}