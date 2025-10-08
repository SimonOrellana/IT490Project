#!/usr/bin/php
<?php
echo "test file running\n";
//echo $argv[1];
$output = shell_exec("php test2.php 'hi'");
echo $output;
?>
