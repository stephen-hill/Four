<?

namespace StephenHill\Example\App
{
	use Four\Framework\Controller;
	use Four\Framework\View;
	
	class ViewPageController extends Controller
	{
		public function Index()
		{
			$view = new View('ViewPage');
			
			return $view;
		}
		
		public function String()
		{
			return "A controller method can simply return a string.";
		}
		
		public function Data()
		{
			$view = new View('ExampleJsonData')->ContentType('application/json');
		}
		
		public function Redirect()
		{
			return View::Redirect('/example/redirect/url');
		}
	}
}