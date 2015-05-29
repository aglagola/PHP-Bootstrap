<?php
include 'init.php';

if ($_POST['login']) {
	if ($_POST['email2'] && $_POST['password2']) {
		$email2 = mysql_real_escape_string($_POST['email2']);
		$password2 = mysql_real_escape_string(hash("sha512", $_POST['password2']));
		$user = mysql_fetch_array(msql_query("SELECT * FROM `users` WHERE `Email`='$email2'"));
		if ($user == '0') {
			die("That username doesn't exist!");
		}
		if ($user['password2'] != $password2) {
			die("Password incorrect");
		}
		$salt =  hash("sha512", rand() . rand() . rand());
		setcookie("c_user", hash("sha512", $email2), time() + 24 * 60 * 60, "/");
		setcookie("c_salt", $salt, time() + 24 * 60 * 60, "/");
		$userID = $user['ID'];
		mysql_query("UPDATE `users` SET `Salt` = '$salt' WHERE `UserID`= '$userID'");
		die("You are now logged in as $email2");
	}

}
//if (empty($_POST) === false) {
//	$email2 = $_POST['email2'];
//	$password2 = $_POST['password2'];
//
//	if (empty($email2) === true || empty($password2) === true) {
//		$errors[] = 'You need to enter an email or password';
//	} 
//	else if (user_exists($email2) === false) {
//		$errors[] = 'We can\'t find that email. Have you signed up yet?';
//
//	}
//}

?>