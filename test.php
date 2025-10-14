#!/usr/bin/php
<?php
echo "test file running\n";
echo $argv[1];
$output;
exec("php test2.php $argv[1]",$output);
echo($output[0]);
?>
