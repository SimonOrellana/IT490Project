<?php
session_start();
if(!isset($_SESSION['token'])){
	session_unset();
	session_destroy();
	header("Location: index.html");
}
?>
<!DOCTYPE html>
<html lang="en">
	<h1>Authentication finally worked!</h1>
</html>
