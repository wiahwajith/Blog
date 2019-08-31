<?php

	require './user.php';

	function getUserAllData($username){
		global $conn;
		$sql = "SELECT * FROM BLOG_USER WHERE username = '$username'";
		$result = $conn->query($sql);
		
		$row = $result->fetch_assoc();
		$user = new User($row['USERNAME'], $row['FIRSTNAME'], $row['LASTNAME']);

		return $user;
		
	}

?>