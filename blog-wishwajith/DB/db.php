<?php

	$host = 'localhost';
	$username = 'root';
	$password = '';
	$database = 'blog';

	function getConnection(){

		global $host;
		global $username; 
		global $password; 
		global $database;

		$conn = mysqli_connect($host,  $username, $password, $database);
		return $conn;
	}

?>