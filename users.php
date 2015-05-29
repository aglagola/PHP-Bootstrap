<?php
function user_exist($email2) {
	//$email2 = sanitize($email2);
	$query = mysqli_query("SELECT COUNT('UserID') FROM users WHERE Email = '$email2'", 0) or die(mysql_error());
	return (mysql_result($query, 0) == 1) ? true : false;
}

?>