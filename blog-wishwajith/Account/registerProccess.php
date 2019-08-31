<?php
	
	if(!isset($_POST['submitForRegister'])){
		header('Location: /Account/login.php');
	}

	require '../DataAccess/registerUser.php';
	
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	if(checkUserExists($username)){
		header('Location: register.php?returnValue='.base64_encode('Username is already exists'));
		exit();
	}			
	
	if(tryRegisterUser($firstname, $lastname, $username, $password)){	
			header('Location: ./login.php');			
	}else{
		header('Location: register.php');
	}
	

	

?>