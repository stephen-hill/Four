<?

namespace Four\Framework;

require_once __DIR__ . "/../vendor/Four/Framework/Autoload.php";

Autoload::Register(
	dir(
		realpath(__DIR__ . "/../vendor")
	)
);

new Application($GLOBALS);