<?php
	//strtolower
	$text1 = "PHP Full Course.";
	//strtolower
	echo strtolower($text1);
	echo '<br/><br/>';

	//strtoupper
	echo strtoupper($text1);
	echo '<br/><br/>';

	$text2 = "just an ordinary phrase.";
	//ucfirst
	echo ucfirst($text2);
	echo '<br/><br/>';
	
	//strlen
	echo strlen($text1);
	echo '<br/>';
	echo strlen($text2);
	echo '<br/><br/>';

	//str_replace
	$text3 = '12.40';
	echo str_replace('.', ',', $text3);
	echo '<br/><br/>';

	//substr
	$text4 = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas lacus velit, congue faucibus lobortis nec, dignissim in velit.';
	echo substr($text4, 0, 55)." ...";
	echo '<br/><br/>';


	$cpf = isset($_POST['cpf']) ? $_POST['cpf'] : '' ;
	$cpf_total_string = strlen($cpf);
	if ($cpf_total_string != 11 && $cpf != '') {
		echo 'Invalid CPF';
	}

?>
<form method="post" action="">
	<label>CPF:
	<input type="text" name="cpf">
	</label>
	<input type="submit" name="Register">
</form>