<?php
	
	require '../DB/db.php';
	$conn = getConnection();

	function tryLoginUser($username, $password){

		global $conn;
		$sql = "SELECT * FROM BLOG_USER WHERE username = '$username'";
		$result = $conn->query($sql);
		if(!$result)
			return false;
		$row = $result->fetch_assoc();

		$hashed_password = $row['PASSWORD_HASH'];

		if(password_verify($password, $hashed_password)){
			return true;
		}

		return false;
	}

?>