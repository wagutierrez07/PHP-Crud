<?php 

/**
 * 
 */
class connect
{
	private $host = "localhost";
	private $user = "root";
	private $pass = "";
	private $db = "crudphp";
	function connection()
	{
	$conn = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
		return $conn;

	}
}
 ?>