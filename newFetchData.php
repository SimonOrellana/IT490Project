<?php
function fetch() {
$servername="127.0.0.1";
$username="fetch";
$password="password";
$dbname = "VERIFICATION";

$conn = new mysqli($servername, $username, $password, $dbname);

//$query = "SELECT username FROM users WHERE username = 'brandon' AND password = 'bmc52'";
$query = "SELECT * FROM testTable";

$result = mysqli_query($conn,$query);
$output = mysqli_fetch_all($result);
return $output;
}
