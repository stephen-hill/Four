<?

namespace Four\Framework;

require_once __DIR__ . "/../vendor/Four/Framework/Autoload.php";

Autoload::Register(
	dir( //Extend Directory so I can do "new Directory()" which will use realpath in the constructor
		realpath(__DIR__ . "/../vendor")
	)
);

Application::Start($GLOBALS);

var_dump(Application::$Cookies);