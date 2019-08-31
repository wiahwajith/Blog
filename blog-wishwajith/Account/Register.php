<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  	<!-- <form action="registerProccess.php" method="POST">
  		<input type="text" name="firstname" required>
		<input type="text" name="lastname" required>
  		<input type="email" name="username" required>
		<input type="password" name="password" required>
		<input type="submit" name="submitForRegister">
	</form> -->



	<div style="margin-top: 100px;">
		<center>
			<main class="login-form">
				<div class="cotainer">
					<div class="row justify-content-center">
						<div class="col-md-4">
							<div class="card">
								<div class="card-header">Register</div>
								<div class="card-body">
									<form action="registerProccess.php" method="POST">

										<div class="form-group row">
											<label for="email_address" class="col-md-4 col-form-label text-md-right">First Name</label>
											<div class="col-md-6">
												<input type="text" id="email_address" class="form-control" name="firstname" required autofocus>
											</div>
										</div>

										<div class="form-group row">
											<label for="email_address" class="col-md-4 col-form-label text-md-right">Last Name</label>
											<div class="col-md-6">
												<input type="text" id="email_address" class="form-control" name="lastname" required autofocus>
											</div>
										</div>

 

										<div class="form-group row">
											<label for="email_address" class="col-md-4 col-form-label text-md-right">Username</label>
											<div class="col-md-6">
												<input type="text" id="email_address" class="form-control" name="username" required autofocus>
											</div>
										</div>

										<div class="form-group row">
											<label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
											<div class="col-md-6">
												<input type="password" id="password" class="form-control" name="password" required>
											</div>
										</div>


										<div class="col-md-6">
											<button type="submit" name="submitForRegister" class="btn btn-primary">
												REGISTER
											</button>

										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

		</main>

	<p>
		<?php 
			if(!empty($_GET['returnValue'])){
				echo base64_decode($_GET['returnValue']);
			}
		 ?>
	</p>
</body>
</html>