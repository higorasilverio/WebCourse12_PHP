<?php	
	if (isset($_POST['name']) && empty($_POST['name'])) {
		echo "Fill the mandatory field 'Full name', please!<br/>";
	}
	else{
		if (isset($_POST['cpf']) && empty($_POST['cpf'])) {
			echo "Fill the mandatory field 'CPF', please!<br/>";
		}
		else{
			if (isset($_POST['cpf']) && !is_numeric($_POST['cpf'])) {
				echo "Fill the mandatory field 'CPF' with numbers, please!<br/>";
			}
		}
	}
?>
<form method="post" action="">
	<label>
		Full name*:
		<input type="text" name="name">
	</label>
	<label>
		CPF*:
		<input type="text" name="cpf">
	</label>
	<input type="submit" name="login" value="register">
</form>