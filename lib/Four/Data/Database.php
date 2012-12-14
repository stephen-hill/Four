<?

class Four_Database
{
	// Fields
	public $DataSourceName; #String
	public $Username; #String
	public $Password; #String
	public $Connected = false; #Boolean
	
	private $connection; #PDO Object
	
	// Public Methods
	public function Connect()
	{
		if ($this->Connected === true)
		{
			return true;
		}
		
		try
		{
			$this->connection = new PDO(
				$this->DataSourceName,
				$this->Username,
				$this->Password,
				array(
					PDO::ATTR_PERSISTENT => true
				)
			);
		}
		catch (PDOException $e)
		{
			var_dump($e);
			return false;
		}
		
		$this->connection->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
		$this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$this->connection->setAttribute(PDO::ATTR_TIMEOUT, 1);
		
		$this->Connected = true;
		return true;
	}
}

?>