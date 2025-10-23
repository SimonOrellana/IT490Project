<?php
function fetch() {
$servername="172.27.80.151";
$username="BRANDON";
$password="bmc52";
$dbname = "verification";

$conn = new mysqli($servername, $username, $password, $dbname);

//$query = "SELECT username FROM users WHERE username = 'brandon' AND password = 'bmc52'";
$query = "SELECT * FROM users");
$result = mysqli_query($conn,$query);
return $result;
}
