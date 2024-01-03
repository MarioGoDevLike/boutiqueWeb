<!doctype html>
<html lang="en">

<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="../css/style.css">

</head>

<body>
	<section class="ftco-section admin-page" style="min-height:100vh; background-color:url(images/login-bg.png);">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10 row justify-content-center">
					<div class="">
						</div>
						<div class="login-wrap p-4 p-md-5">
							<div class="d-flex">
								<div class="w-100 text-center">
									<h3 class="mb-4 text-white">Admin Login</h3>
								</div>
								
							</div>
							<form action="admin_action.php" method="post" class="signin-form">
								<div class="form-group mb-3">
									<label class="label text-white" for="name">Email</label>
									<input type="text" class="form-control" placeholder="Username"name="adminEmail" required>
								</div>
								<div class="form-group mb-3">
									<label class="label text-white" for="password">Password</label>
									<input type="password" class="form-control" placeholder="Password" name="adminPassword" required>
								</div>
								<div class="form-group">
									<button type="submit" class="form-control btn btn-primary rounded submit px-3 bg-primary" style="background-color:#007bff !important;">Sign
										In</button>
								</div>
								<div class="form-group d-md-flex">					
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>
<?php 
if (isset($_GET['error']) && $_GET['error'] == 1) {
    echo "<script>alert('User doesn't exist.');</script>";
} else if (isset($_GET["error"]) && $_GET["error"] == 2) {
    echo "<script>alert('Email is already in use.');</script>";
} ?>