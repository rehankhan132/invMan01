<?php
/**
 *  Database Class
 */
class Database
{
	
	private $con;
	public function connect(){
		include_once("constants.php");
		$this->con = new mysqli(HOST,USER,PASS,DB);

		if ($this->con) {
			return $this->con;
		}
		return "DATABASER_CONNECTION_FAIL";
	}

}

// $db = new Database();
// $db->connect();

?>