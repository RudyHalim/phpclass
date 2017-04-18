<?php
class Database {
	protected $db_host = "localhost";
	protected $db_user = "root";
	protected $db_pass = "";
	protected $db_name = "gameartis";

	private $connection;
	
	function __construct() 
	{
		$this->connect();
	}

	function connect() 
	{
        $this->connection = mysqli_connect($this->db_host,$this->db_user,$this->db_pass, $this->db_name);
	}
	
	function disconnect()
	{
		return mysqli_close($this->connection);
	}

	function query($string)
	{
		$result = mysqli_query($this->connection, $string);

		$firstword = explode(" ", trim($string));
		$querymode = $firstword[0];

		if(strtolower($querymode) == "select") {
			$array = array();
			while ($row = mysqli_fetch_assoc($result)) {
				$array[] = $row;
			}
			return $array;
		} else {
			return $result ? true : false;
		}
	}

}