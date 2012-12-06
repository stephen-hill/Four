<?

namespace Four;
require_once("core/Four/Kernel.php");
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

?>