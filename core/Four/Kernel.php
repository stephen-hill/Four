<?

namespace Four
{
	class Kernel
	{
		// Public Methods
		public static function Boot()
		{
			require_once("Autoload.php");
			Autoload::Register();
		}
	}
}

?>