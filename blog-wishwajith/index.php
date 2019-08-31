<?php
include './Account/user.php';
require './Authenticaton/Autherize.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<?php require './Modules/header.php' ?>
	<?php require './DataAccess/postsOperations.php' ?>
	<center><h1>WELCOME !</h1></center>
	<?php
	$POSTS = getAllPosts();
	foreach ($POSTS as $post) {
		?>
		<div class="card" style="width:50%; margin: 0 auto;">
			<div class="card-body">
				<h5 class="card-title"><?php echo $post->author; ?></h5><br>
				<h6 class="card-title"><?php echo $post->date_created; ?></h6>
				<p class="card-text"><?php echo $post->content; ?></p>
				<button href="#" style="display: inline-block;" class="btn btn-primary stretched-link btnVote">UPVOTE</button><span class="vote" id='<?php echo $post->id; ?>'>&nbsp&nbsp<span><?php echo $post->feedback_count; ?></span><input type="hidden" value="0"></span>

			</div>
		</div>
		<br>

		<?php
	}
	?>


	
</body>
<script
src="https://code.jquery.com/jquery-3.4.1.min.js"
integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
crossorigin="anonymous"></script>
<script type="text/javascript">
	$('.btnVote').on('click',function(){

		var id = $(this).next().attr('id');

		

		var button = $(this);
		var element = $(this).next().children('span');

		var validator = $(this).next().children('input');
		var value = element.text();
		value = value == '' ? 0 : value;
		if(validator.val() == '0'){
			element.text(parseInt(value) + 1);
			validator.val('1');
			button.text('DOWNVOTE');
			$.ajax({
				type:"POST",
				data : 'id='+id,
				url : './DataAccess/addFeedback.php',
				success:function(data){

					console.log(data);
				}
			});
		}else{
			element.text(parseInt(value) - 1);
			validator.val('0');
			button.text('UPVOTE');
		}
		
		
	});
</script>
</html>