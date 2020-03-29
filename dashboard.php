<?php

session_start();

$login = $_SESSION['login'];

if($login != 'success') {
	header('location:index.php');
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
	<script type="text/javascript" language="javascript" src="comments.json"></script>

</head>
<body class="">

	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">New message</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form>
						<div class="form-group">
							<label for="new_email">Email</label>
							<input type="new_email" class="form-control" id="new_email" aria-describedby="emailHelp" placeholder="Enter email" name="new_email">
						</div>
						<div class="form-group">
							<label for="new_username">Username</label>
							<input type="text" class="form-control" id="new_username" aria-describedby="emailHelp" placeholder="Enter email" name="new_username">
						</div>
						<div class="form-group">
							<label for="new_password">Password</label>
							<input type="new_password" class="form-control" id="new_password" placeholder="Password" name="new_password">
						</div>
						<div class="form-group">
							<label for="new_password_2">Repeat Password</label>
							<input type="password" class="form-control" id="new_password_2" placeholder="Password" name="new_password_2">
						</div>
						<div class="form-group">
							<label for="new_first_name">First Name</label>
							<input type="text" class="form-control" id="new_first_name" placeholder="" name="new_first_name">
						</div>
						<div class="form-group">
							<label for="new_last_name">Last Name</label>
							<input type="text" class="form-control" id="new_last_name" placeholder="" name="new_last_name">
						</div>
						<div class="form-group">
							<label for="new_address">Address</label>
							<input type="text" class="form-control" id="new_address" placeholder="" name="new_address">
						</div>
						<div class="form-group">
							<label for="new_phone_number">Phone</label>
							<input type="text" class="form-control" id="new_phone_number" placeholder="" name="new_phone_number">
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</div>
		</div>
	</div>

	<div id="dashboard" class="row container mx-md-5 px-md-5">
		<div class="w-100 d-flex justify-content-between py-2 bg-light px-2">
			<div>Advanced Security</div>
			<div>
				<div>
					<div class="dropdown float-right">
						<button class="btn btn-white dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Welcome admin
						</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							<a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>My Profile</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt mr-1"></i>Logout</a>
						</div>
					</div>
					<img src="flags.jpg" class="w-25 d-inline float-right" style="position: relative;top: 10px">
				</div>
			</div>
		</div>

		<!-- navbar -->

		<div class="nav flex-column nav-pills col-3 side_nav" id="v-pills-tab" role="tablist" aria-orientation="vertical">
			<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fas fa-home mr-2"></i>Home</a>
			<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="fas fa-user mr-2"></i>My Profile</a>
			<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="fas fa-users mr-2"></i>Users</a>
			<a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fas fa-user-shield mr-2"></i>User Roles</a>
		</div>
		<div class="tab-content col-9 main_content" id="v-pills-tabContent">

			<!-- Home section -->

			<div class="tab-pane fade mt-2 show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
				<h2 class="d-inline">Comments Wall</h2>
				<div class="d-inline text-secondary">
					<small>last 7 posts</small>
				</div><br>
				<div id="comments">
				</div>

				<!-- comment box -->

				<h5>Leave comment</h5>
				<form action="operations.php" method="post">
					<textarea class="form-control" name="comment" required=""></textarea><br>
					<button class="btn btn-sm btn-primary" type="submit" name="update_comment"><i class="fas fa-comment mr-2" nam></i>Comment</button>
				</form><br>
				<div class="text-secondary text-center">
					<small>Copyright by &copy; Advanced Security 2020</small><br><br>
				</div>
			</div>

			<!-- My Profile -->

			<div class="tab-pane fade mt-2" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">

				<div class="alert alert-warning">
					<p><strong>Note !</strong> Administrator password cannot be changed in demo.</p>
				</div>

				<ul class="list-group">
					<li class="list-group-item bg-light">Your Details</li>
					<li class="list-group-item">

						<div id="message"></div>

						<form action="" method="post" id="admin_data">
							<div class="form-group">
								<label for="first_name">First Name</label>
								<input type="text" class="form-control" id="first_name" placeholder="John" name="first_name" value="<?php echo $_SESSION['firstname']; ?>">
							</div>
							<div class="form-group">
								<label for="last_name">Last Name</label>
								<input type="text" class="form-control" id="last_name" placeholder="" name="last_name" value="<?php echo $_SESSION['lastname']; ?>">
							</div>
							<div class="form-group">
								<label for="address">Address</label>
								<input type="text" class="form-control" id="address" placeholder="" name="address" value="<?php echo $_SESSION['address']; ?>">
							</div>
							<div class="form-group">
								<label for="phone_number">Phone</label>
								<input type="number" class="form-control" id="phone_number" placeholder="" name="phone_number" value="<?php echo $_SESSION['phone']; ?>">
							</div>
							<button class="btn btn-primary" type="submit" id="update_admin" name="update_admin">Update</button>
						</form>

					</li>
				</ul>
				<div class="text-secondary text-center mt-3">
					<small>Copyright by &copy; Advanced Security 2020</small><br><br>
				</div>

			</div>
			<div class="tab-pane fade mt-2" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">

				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus pr-2"></i>Add User</button><br>

				<div class="row mt-4 d-flex justify-content-around">
					<div class="col-6 mb-0 pb-0	">
						<span>Show</span>
						<input type="number" name="" class="form-control d-inline" value="10" style="width: 25px; height: 20px;">
						<span>entries</span>
					</div>
					<div class="col-6 mb-3 form-inline d-flex justify-content-end" style="position: relative;right: 0;">
						<label class="text-right mr-0 pr-0">Search</label>
						<input type="search" name="search" class="form-control form-control-sm d-inline ml-2">
					</div>
				</div>

				<!-- Table -->

				<div id="table" class="mt-3">
					<table class="table table-striped">
						<thead>
							<tr>
								<th scope="col">Username</th>
								<th scope="col">Email</th>
								<th scope="col">Register Date</th>
								<th scope="col">Confirmed</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Andy</td>
								<td>abdtfanykuaj@gmail.com</td>
								<td>2020-03-19</td>
								<td class="text-success">Yes</td>
								<td>
									<div class="dropdown float-right">
										<button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="fas fa-user mr-2"></i>User
										</button>
										<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
											<a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>My Profile</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt mr-1"></i>Logout</a>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Bunny</td>
								<td>bunnyboman@gmail.com</td>
								<td>2020-03-16</td>
								<td class="text-danger">No</td>
								<td>
									<div class="dropdown float-right">
										<button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="fas fa-user mr-2"></i>User
										</button>
										<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
											<a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>My Profile</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt mr-1"></i>Logout</a>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Sandy</td>
								<td>sandysam@gmail.com</td>
								<td>2020-03-04</td>
								<td class="text-success">Yes</td>
								<td>
									<div class="dropdown float-right">
										<button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="fas fa-user mr-2"></i>User
										</button>
										<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
											<a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>My Profile</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt mr-1"></i>Logout</a>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Sanjay</td>
								<td>sanjaysahubandla@gmail.com</td>
								<td>2020-02-14</td>
								<td class="text-success">Yes</td>
								<td>
									<div class="dropdown float-right">
										<button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="fas fa-user mr-2"></i>User
										</button>
										<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
											<a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>My Profile</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt mr-1"></i>Logout</a>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Tom</td>
								<td>tomcruise@gmail.com</td>
								<td>2020-02-11</td>
								<td class="text-success">Yes</td>
								<td>
									<div class="dropdown float-right">
										<button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="fas fa-user mr-2"></i>User
										</button>
										<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
											<a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>My Profile</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt mr-1"></i>Logout</a>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Bunny</td>
								<td>bunnyboman@gmail.com</td>
								<td>2020-03-16</td>
								<td class="text-success">Yes</td>
								<td>
									<div class="dropdown float-right">
										<button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="fas fa-user mr-2"></i>User
										</button>
										<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
											<a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>My Profile</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt mr-1"></i>Logout</a>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Sandy</td>
								<td>sandysam@gmail.com</td>
								<td>2020-03-04</td>
								<td class="text-success">Yes</td>
								<td>
									<div class="dropdown float-right">
										<button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="fas fa-user mr-2"></i>User
										</button>
										<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
											<a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>My Profile</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt mr-1"></i>Logout</a>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Sanjay</td>
								<td>sanjaysahubandla@gmail.com</td>
								<td>2020-02-14</td>
								<td class="text-success">Yes</td>
								<td>
									<div class="dropdown float-right">
										<button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="fas fa-user mr-2"></i>User
										</button>
										<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
											<a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>My Profile</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt mr-1"></i>Logout</a>
										</div>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>

				<div class="d-flex justify-content-between">
					<div class="text-secondary">Showing 1 to 10 of 3,418 entries</div>
					<div>
						<nav aria-label="...">
							<ul class="pagination pagination-sm">
								<li class="page-item disabled">
									<a class="page-link" href="#" tabindex="-1">Previous</a>
								</li>
								<li class="page-item active"><a class="page-link" href="#">1<span class="sr-only">(current)</span></a></li>
								<li class="page-item">
									<a class="page-link" href="#">2 </a>
								</li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item"><a class="page-link" href="#">4</a></li>
								<li class="page-item"><a class="page-link" href="#">5</a></li>
								<li class="page-item"><a class="page-link" href="#">...</a></li>
								<li class="page-item"><a class="page-link" href="#">242</a></li>
								<li class="page-item">
									<a class="page-link" href="#">Next</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>

				<div class="text-secondary text-center mt-3">
					<small>Copyright by &copy; Advanced Security 2020</small><br><br>
				</div>

			</div>
			<div class="tab-pane fade mt-2" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
		</div>
	</div>

	<script type="text/javascript">

		$(document).ready(function(){

			$('#admin_data').on('submit', function(e){
				e.preventDefault();
				$.ajax({  
		        type: "POST",
		        url: "operations.php",
				data: $('form').serialize(),
		        success: function(data){                    
		            $('#message').html(data);
		        }

		    });
			});

			$.getJSON( "comments.json", function(obj) {
				$.each(obj, function(key, value) {

					$('#comments').append('						<div class="border-left p-2 px-3 my-3" id="comment">						<blockquote class="blockquote text-left">							<p class="mb-0">'+value["comment"]+'</p>							<footer class="blockquote-footer">								<strong>admin</strong>								<span class="font-italic">at </span><span class="font-italic" id="timestamp">'+value["timestamp"]+'</span>							</footer>						</blockquote></div>');

				});
			});
		});
		
	</script>

</body>
</html>