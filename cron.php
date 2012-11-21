<?

header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");

require_once("autoload.php");

// Only allow execution from the CLI (i.e. cron)
//if (php_sapi_name() !== "cli")
//{
//	die;
//}

// Script Structure
// 1. Connect to the local database and get script settings
// 2. Check we can connect to about 66% out of the major websites
// 3.

// Connect to the database
$db = new Database();
$db->DataSourceName = "mysql:unix_socket=/var/run/mysqld/mysqld.sock;dbname=information_schema";
$db->Username = "root";
$db->Password = "Biograph126152";
$db->Connect();

// Define major websites
$majorWebsites = array(
	"Google" => "http://google.com",
	"Facebook" => "http://www.google.com",
	"YouTube" => "http://www.youtube.com",
	"Yahoo!" => "http://www.yahoo.com",
	"Wikipedia" => "http://en.wikipedia.org"
);

$internetCheck = 0;

// Check that we're connected to the internet
foreach ($majorWebsites as $key => $value)
{
	$r = new HttpRequest($value, HttpRequest::METH_GET);
	$r->setOptions(
		array(
			"redirect" => 100,
			"timeout" => 2
		)
	);
	$r->send();
	if ($r->getResponseCode() == 200)
	{
		$internetCheck++;
	}
}

if ($internetCheck >= (int)round(count($majorWebsites) / 100 * (66.66)))
{
	echo "We're connected to the internet.";
}

// Define list of websites to check
$websitesToCheck = array(
	"Gatekiller's Projects" => "http://projects.gatekiller.co.uk",
	"Myerscough Bloom" => "http://bloom.myerscough.ac.uk",
	"Livestock Northwest" => "http://livestocknw.co.uk",
	"Ford Motorsport" => "http://fordmotorsport.co.uk",
	"Does not exist" => "http://doessdlflskdjflksdjfkjlsdflkjsdflkjsdfkljsdlkfjlskdfjlksdjf.bla"
);

// Perform a quick check of the websites
foreach ($websitesToCheck as $key => $value)
{
	$r = new HttpRequest($value, HttpRequest::METH_GET);
	$r->setOptions(
		array(
			"redirect" => 100,
			"timeout" => 2
		)
	);
	try
	{
		$r->send();
		if ($r->getResponseCode() == 200)
		{
			echo "<p>{$key} is up.</p>";
		}
		else
		{
			echo "<p>Response code was {$r->getResponseCode()}.";
		}
	}
	catch (HttpException $ex)
	{
		echo "<p>{$key} is down.</p>";
	}
}

$db->Test();

?>