<?

namespace Four
{
	class Kernel
	{
		// Public Fields
		public static $Routes = array();

		// Public Methods
		public static function Boot()
		{
			require_once("Autoload.php");
			Autoload::Register();
		}
	}
}

?>