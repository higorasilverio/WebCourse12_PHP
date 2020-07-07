<?php
	require_once("functions_validate_login.php");
	$user_login = $_POST['login'];
	$user_password = $_POST['password'];
	$validate_user = validate_login($user_login, $user_password);
	if ($validate_user) {
		echo "Access liberated!";
	}
	else{
		echo "Access denied!";
	}
?>