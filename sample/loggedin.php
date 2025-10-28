<?php
include("webServerClient.php");
echo "<h1>HELLO THERE</h1>";
$output = sendRabbitWeb('login','user','pass');
//echo "<h1> $output[0]</h1>";
var_dump($output);
?>
~        
