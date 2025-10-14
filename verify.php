<?php
	require_once('mysqlconnect.php');

	if($_SERVER['REQUEST_METHOD'] == 'POST') {

		/*
		$username = $_POST['username'];
		$password = $_POST['password'];
		*/

		$username = $argv[1];
		$password = $argv[2];	

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
