#!/usr/bin/php
<?php
include 'fetchData.php';

$result =  fetch();
//$output = mysqli_fetch_all($result);
echo var_dump($result);
?>
