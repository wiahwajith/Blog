<?php
	
	if(!isset($_POST['submitForLogin'])){
		header('Location: /Account/login.php');
	}

	require '../DataAccess/loginUser.php';
	require './UserCommonOperations.php';

	$username = $_POST['username'];
	$password = $_POST['password'];

	if(tryLoginUser($username, $password)){
		session_start();
		$_SESSION['user'] = getUserAllData($username);
		header('Location: ../index.php');
	}else{
		header('Location: login.php?returnValue='.base64_encode('Invalied Credentials'));
	}

	

?>