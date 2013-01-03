<?

namespace Four\Core;
use Four\Web\HttpRequest;


require_once(__DIR__ . "/src/Four/Core/Kernel.php");
Kernel::Boot();


$c = new Controller();
$c->Request = new HttpRequest();

var_dump($c);