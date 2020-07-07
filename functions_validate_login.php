<?php
	function validate_login($login, $password){
		$login_bd = 'higor_silverio';
		$password_bd = '1234';
		if ($login == $login_bd && $password == $password_bd) {
			return true;
		}
		return false;
	}
?>