<?

namespace Four;
require_once("core/Four/Kernel.php");
Kernel::Boot();

$r = new Route(array(
	"Pattern" => "/page/{action}/{name}",
	"Controller" => "PageController"
));

?>