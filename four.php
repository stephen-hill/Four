<?

namespace Four\Core;
require_once(__DIR__ . "/src/Four/Core/Kernel.php");
Kernel::Boot();

// This should be in a class somewhere.
$ExampleRoute = new Route(array(
	"Pattern" => "/page/{Action}/{Id}",
	"Controller" => "PageController",
	"Namespace" => "/",
	"Defaults" => array(
		"Action" => "View",
		"Id" => 0
	)
));