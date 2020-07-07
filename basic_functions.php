<?php
	//isset() -> returns true when the variable is already initialized
	$value = 1234;
	if ( isset($value) ) {
		echo " isset() - Variabel initialized! <br/>";
	}
	//empty() -> returns true if the variable is '', 0, '0', null or array() (the last case is a empty array)
	if (empty($value)) {
		echo 'The function returns false, so it is not shown!';
	} else{
		echo " empty() - Variabel is not empty! <br/>";
	}
	//is_numeric() -> Returns true if the value is numeric
	if (is_numeric($value)) {
		echo " is_numeric() - Variabel is a number! <br/>";
	}
?>