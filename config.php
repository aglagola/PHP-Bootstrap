<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "lift";


$bd = mysqli_connect($host, $user, $pass, $db) or die("Opps some thing went wrong");

if (!$bd) {
	die('Could not connect: ') . mysql_error();
}

$bd_selected = mysqli_select_db($bd, $db);

if (!$bd_selected) {
	die('Can\'t use database ') . mysql_error();
}

?>
