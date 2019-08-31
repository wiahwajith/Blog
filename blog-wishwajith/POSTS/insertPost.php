<?php
include '../Account/user.php';
require '../Authenticaton/Autherize.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<?php require '../Modules/header.php' ?>

	<div style="margin-top: 100px;">
		<center>
			<main class="login-form">
				<div class="cotainer">
					<div class="row justify-content-center">
						<div class="col-md-8">
							<div class="card">
								<div class="card-header">Create Post</div>
								<div class="card-body">
									<form action="addPostProccess.php" method="POST">

										<div class="form-group row">
											<label for="email_address" class="col-md-4 col-form-label text-md-right">Write Post</label>
											<div class="col-md-8">
												<textarea class="form-control" name="blog" style="width: 100%; min-height: 300px;"></textarea>
											</div>
										</div>

										

										<div class="col-md-6">
											<button type="submit" name="submitForPost" class="btn btn-primary">
												POST
											</button>

										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

</body>
</html>