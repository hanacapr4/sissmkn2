<?php 

class Database {

	var $host = "localhost";
	var $username = "root";
	var $pass = "";
	var $db = "sekolahfix";

	function dbconnect()
	{
		$con = mysqli_connect($this->host, $this->username, $this->pass, $this->db);
		return $con;
	}

} 

?>