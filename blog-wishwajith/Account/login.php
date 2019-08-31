<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div style="margin-top: 100px;">
		<center>
			<main class="login-form">
				<div class="cotainer">
					<div class="row justify-content-center">
						<div class="col-md-4">
							<div class="card">
								<div class="card-header">Login</div>
								<div class="card-body">
									<form action="loginProccess.php" method="POST">
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
											<button type="submit" name="submitForLogin" class="btn btn-primary">
												LOGIN
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
	</center>
</div>
	<!-- <form action="loginProccess.php" method="POST">
		<input type="email" name="username" required>
		<input type="password" name="password" required>
		<input type="submit" name="submitForLogin">
	</form> -->
</body>
</html>