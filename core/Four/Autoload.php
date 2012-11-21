<?

namespace Four
{
	class Autoload
	{
		// Static Methods
		public static function Autoload($class)
		{
			if (__NAMESPACE__ === "Four")
			{
				$class = substr($class, 5);
				require_once($class . ".php");
			}
		}

		public static function Register()
		{
			spl_autoload_register
			(
				__NAMESPACE__ . "\\Autoload::Autoload",
				true,
				false
			);
		}
	}
}

?>