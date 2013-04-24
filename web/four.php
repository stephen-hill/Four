<?

namespace Four\Framework;

require_once __DIR__ . '/../vendor/Four/Framework/Autoload.php';

Autoload::Register(
	dir(__DIR__ . '/../vendor')
);

$app = new Application($_COOKIE, $_FILES, $_GET, $_POST, $_SERVER);

if (File::Exists(__DIR__ . '/../app/four.php'))
{
	require(__DIR__ . '/../app/four.php');
}

$app->Start();