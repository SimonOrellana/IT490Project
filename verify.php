<?php
	require_once('mysqlconnect.php');

	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		$_POST['username'];
		$_POST['password'];

		$query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";

		$result = mysqli_query($connect, $query);

		if(mysqli_num_rows($result) > 0) {
			echo "User exists";
		}
		else {
			echo "Incorrect username or password";
		}
	}
>
