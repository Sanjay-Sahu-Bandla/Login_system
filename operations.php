<?php

session_start();

// Update admin details

if(isset($_POST['first_name'])&&($_POST['last_name'])&&($_POST['address'])&&($_POST['phone_number'])) {

	$admin_data = file_get_contents('admin.json');
	$encoded_data = json_decode($admin_data,true);

	$_SESSION['firstname'] = $encoded_data['firstname'] = $_POST['first_name'];
	$_SESSION['lastname'] = $encoded_data['lastname'] = $_POST['last_name'];
	$_SESSION['address'] = $encoded_data['address'] = $_POST['address'];
	$_SESSION['phone'] = $encoded_data['phone'] = $_POST['phone_number'];

	$message = '<div class="alert alert-success">Details updated successfully.</div>';

	echo $message;

	// header('location:dashboard.php?id=0');
}


// add comment to json file

if(isset($_POST['update_comment'])) {

	$admin_data = file_get_contents('comments.json');
	$encoded_data = json_decode($admin_data,true);

	$timestamp = date("Y-m-d h:i:sa");

	$comment = array(

		'comment' => $_POST['comment'],
		'timestamp' => $timestamp

	);

	array_unshift($encoded_data, $comment);

	$jsonData = json_encode(array_values($encoded_data), JSON_PRETTY_PRINT);

	file_put_contents('comments.json', $jsonData);

	header('location:dashboard.php');

}

?>