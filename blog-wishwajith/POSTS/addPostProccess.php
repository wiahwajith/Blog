<?php

	if(!isset($_POST['submitForPost']))
		header('Location: insertPost.php');

	
	require '../DataAccess/addPosts.php';
	require '../Account/user.php';

	session_start();
	$user = $_SESSION['user'];
	$blog = $_POST['blog'];

	AddPost($blog, $user->username);

	header('Location: ../index.php');

?>