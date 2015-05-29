
<?php
include 'init.php';

//if(isset($_POST['ssubmit'])) {


//}


$value3 = $_POST['UserName'];
$value4 = $_POST['Email'];
$value5 = $_POST['Password'];

$value1 = mysql_escape_string($_POST['FirstName']);
$value2 = mysql_escape_string($_POST['LastName']);
$value3 = mysql_escape_string($_value3);
$value4 = mysql_escape_string($_value4);
$value5 = mysql_escape_string($_value5);

$value5 = md5($value5);
mysql_query("INSERT INTO `users` ('UserID', 'FirstName', 'LastName', 'Email', 'Username', 'Password') VALUES (NULL, '$values1', '$values2', '$values3', '$values4, $value5')") or die(mysql_error());

//$sql = "INSERT INTO users (FirstName) VALUES ('$value1')";
//$sql = "INSERT INTO users (LastName) VALUES ('$value2')";
//$sql = "INSERT INTO users (UserName) VALUES ('$value3')";
//$sql = "INSERT INTO users (Email) VALUES ('$value4')";
//$sql = "INSERT INTO users (Password) VALUES ('$value5')";

?>