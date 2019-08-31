<?php

	require './DB/db.php';
	require './POSTS/post.php';

	$conn = getConnection();	

	function getAllPosts(){

		global $conn;

		$sql = "SELECT P.ID, P.POST_CONTENT, P.DATE_CREATED, CONCAT(U.FIRSTNAME , ' ', U.LASTNAME) AS Author, F.Feedback_Count FROM POST P INNER JOIN BLOG_USER U ON P.USER_ID = U.ID LEFT JOIN (SELECT COUNT(ID) AS Feedback_Count, POST_ID FROM FEEDBACK GROUP BY POST_ID) F ON P.ID = F.POST_ID ORDER BY P.date_created DESC LIMIT 0, 50 ";
		$result = $conn->query($sql);

		$set =  array();
		while($row = $result->fetch_assoc()){
			array_push($set, new POST($row['ID'], $row['POST_CONTENT'], $row['DATE_CREATED'], $row['Author'], $row['Feedback_Count']));
		}
		return $set;
	}

?>