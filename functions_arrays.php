<?php
	//is_array -> Verify if the variable is a array
	$array = array(10=>'Higor', 11=>'Augusto', 12=>'Silverio');
	$return = is_array($array);
	if ($return) {
		echo "True <br/>";
	}
	else{
		echo "False <br/>";
	}

	//in_array -> Verify if the parameter is within
	$return = in_array('Silverio', $array);
	if ($return) {
		echo "True <br/>";
	}
	else{
		echo "False <br/>";
	}

	//array_keys -> return the keys of one array (positions)
	var_export( array_keys($array) );
	echo "<br/>";

	//sort
	$array_modified1 = $array;
	var_export($array_modified1);
	echo ' -> ';
	sort($array_modified1);
	var_export($array_modified1);
	echo "<br/>";

	//asort
	$array_modified2 = $array;
	var_export($array_modified2);
	echo ' -> ';
	asort($array_modified2);
	var_export($array_modified2);
	echo "<br/>";

	//count
	echo count($array);
	echo "<br/>";

	//array_merge
	$array2 = array(0=>'Priscila', 1=>'de Jesus', 2=>'Rodrigues');
	var_export( array_merge($array, $array2) );
	echo "<br/>";

	//explode
	$string = '07/07/2020';
	$return_explode = explode('/', $string);
	var_export($return_explode);
	echo "<br/>";

	//implode
	$return_implode = implode('/', $return_explode);
	echo $return_implode;
	echo "<br/>";
?>