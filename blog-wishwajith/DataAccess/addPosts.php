<?php
	
	require '../DB/db.php';
	$conn = getConnection();

	function AddPost($blog, $user){

		echo $user;
		global $conn;

		$blog = mysqli_real_escape_string($conn, $blog);
		$user = $user;
		$date = date("Y-m-d");

		$sql = "INSERT INTO POST (POST_CONTENT, DATE_CREATED, USER_ID)
				VALUES('$blog', '$date', (SELECT ID FROM BLOG_USER WHERE username = '$user'))";
		$result = $conn->query($sql);

		if(!$result)
			echo "Error Occured";

	}
		

?>