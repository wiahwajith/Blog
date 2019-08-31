<?php
	
	require '../DB/db.php';
	$conn = getConnection();


	function checkUserExists($username){

		global $conn;
		$username = $username;

		$sql = "SELECT * FROM BLOG_USER WHERE username = '$username'";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();

		if(!empty($row['ID']))
			return true;
		return false;
	}

	function tryRegisterUser($firstname, $lastname, $username, $password){

		global $conn;
		$firstname = $firstname;
		$lastname = $lastname;
		$username = $username;
		$password = password_hash($password, PASSWORD_DEFAULT);
		$date = date("Y-m-d");

		$sql = "INSERT INTO BLOG_USER (firstname, lastname, username, password_hash, date_registerd)
				VALUES('$firstname', '$lastname', '$username', '$password', '$date')";
		$result = $conn->query($sql);

		if($result)
			return true;
		return false;
	}

?>