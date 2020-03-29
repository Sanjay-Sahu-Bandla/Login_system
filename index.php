<?php

session_start();

if(file_exists('admin.json')) {

	$admin_data = file_get_contents('admin.json');
	$encoded_data = json_decode($admin_data,true);
}

if(isset($_POST['username'])&&($_POST['password'])) {
	

	if(($encoded_data['username'] == $_POST['username'])&&$encoded_data['password'] == $_POST['password']) {

		$_SESSION['login'] = 'success';
		
		$_SESSION['firstname'] = $encoded_data['firstname'];
		$_SESSION['lastname'] = $encoded_data['lastname'];
		$_SESSION['address'] = $encoded_data['address'];
		$_SESSION['phone'] = $encoded_data['phone'];
		
		header('location:dashboard.php');
	}

	else {
		$error = '<div class="alert alert-warning text-center">Invalid credentials !</div>';
	}

}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login System</title>

	<!-- Bootstrap CSS CDN -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<!-- cusomized css -->

	<link rel="stylesheet" type="text/css" href="style.css">

	<!-- fontawesome -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" rel="stylesheet">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

	<!-- JS, Popper.js, and jQuery - Bootstrap-->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

	<!-- Ajax -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- customized js -->
	<script type="text/javascript" src="control.js"></script>

</head>
<body class="">

	<img src="flags.jpg" class="d-inline float-right mr-5" style="position: absolute;top: 5px; right: 130px; width:120px; height: 15px;">

	<div class="container d-flex justify-content-center align-items-center">
		<div id="main_section" style="width: 350px;"><br><br><br>
			<h2 class="text-center">Advanced Security</h2><br>

			<form class="border rounded p-4" method="post">
				<p class="text-weight-bolder">LOGIN</p>

				<?php

				if (isset($error)) {
					echo $error;
				}

				?>

				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" name="username" class="form-control" id="username" required="">
				</div>

				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" class="form-control" id="password" required="">
				</div>
				<a href="forgot">Forgot Password ?</a><br><br>

				<button class="btn btn-success btn-block text-center mt-2">Login</button>
				<div class="text-secondary text-center mx-auto">
					<small>or connect with</small>
				</div>

				<ul id="icons" class="list-unstyled d-flex justify-content-center">
					<li class="d-inline">
						<a href=""><i class="mt-4 fab fa-facebook-f rounded" style="color: #fff; background: #3b5998; padding: 4px 7px; "></i>
						</a>
					</li>
					<li class="d-inline ml-2">
						<a href=""><i class="mt-4 fab fa-twitter p-1 rounded" style="color: #fff; background: #1DA1F2;"></i>
						</a>
					</li>
					<li class="d-inline" style="font-size: 18px;">
						<a href="">
							<i class="fab fa-google p-1 ml-2" style="color: #f00; background: transparent; margin-top: 22px;"></i>
						</a>
					</li>
				</ul>
			</form>
			<div class="text-center mt-1">
				<small class="text-secondary">Don't have an account? <a href="">Sign Up</a></small>
			</div>
		</div>
	</div>

</body>
</html>