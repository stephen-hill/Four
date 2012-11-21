<?

class Database
{
	// Fields
	public $DataSourceName; #String
	public $Username; #String
	public $Password; #String
	public $Connected = false; #Boolean
	
	private $_Connection; #PDO Object
	
	// Public Methods
	public function Connect()
	{
		if ($this->Connected === true)
		{
			return true;
		}
		
		try
		{
			$this->_Connection = new PDO(
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
		
		$this->_Connection->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
		$this->_Connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$this->_Connection->setAttribute(PDO::ATTR_TIMEOUT, 1);
		
		$this->Connected = true;
		return true;
	}
	
	public function Test()
	{
		$statement = $this->_Connection->prepare("Select * From PROCESSLIST");
		$statement->execute();
		
		while($row = $statement->fetch())
		{
			echo "<p>";
			var_dump($row);
			echo "</p>";
		}
	}
}

?>