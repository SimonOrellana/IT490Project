#!/usr/bin/php
<?php
/*
echo "test file running\n";
echo $argv[1];
//$output;
//exec("php test2.php $argv[1]",$output);
//include("test2.php");
runTest($argv[1])
	//echo($output[0]);
	//
	//
	//
 */
include("webServerClient.php");
sendRabbitWeb("login","user","pass");

?>
