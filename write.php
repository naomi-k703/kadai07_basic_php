<?php
$employee = $_POST["employee-number"];
$department= $_POST["department"];
$contact = $_POST["contact"];
$name = $_POST["name"];
$gender = $_POST["gender"];
$memo = $_POST["memo"];

$c =",";
$str =$employee.$c.$section.$c.$contact.$c.$name.$c.$gender.$c.$memo;

$file = fopen("data.csv","a");
fwrite($file,$str."\n");
fclose($file);
header("Location: read.php");
exit;
?>
