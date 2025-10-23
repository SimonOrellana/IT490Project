<?php

function addUserDb($username,$password){
$servername = "localhost";
$username = "testUser";
$password = "12345";
$dbname = "verification";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users (username, password)
VALUES ($username, $password)";

if ($conn->query($sql) === TRUE) {
	echo "New record created successfully";
	return true
} else {
  return false;
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>

