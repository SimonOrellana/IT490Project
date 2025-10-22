<?php
require_once('webServerClient.php');
$username = $_POST['uname'];
$password = $_POST['pword'];
if (!isset($_POST))
{
	$msg = "NO POST MESSAGE SET, POLITELY FUCK OFF";
	echo json_encode($msg);
	exit(0);
}
$request = $_POST;
$response = "unsupported request type, politely FUCK OFF";
switch ($request["type"])
{
case "login":
	//Insert code that will pass login values and return true/false from RabbitMQ
	$is_valid = true;
	if($is_valid) {
		session_start();
		$_SESSION['token'] = random_bytes(12);
		$response = ['Redirect' => 'login_page.php'];
	}
	else {
		$response = 'Incorrect login information, please try again';
	}
	break;
}
echo json_encode($response);
exit(0);

?>
