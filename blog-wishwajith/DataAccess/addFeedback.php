<?php

	if(!isset($_POST['id']))
		echo 'Error';

	$id = $_POST['id'];

	require '../DB/db.php';

	$conn = getConnection();

	$sql = "INSERT INTO FEEDBACK (POST_ID) VALUES('$id')";
	$result = $conn->query($sql);

	echo 'Success';


?>