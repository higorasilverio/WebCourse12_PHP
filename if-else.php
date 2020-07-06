<?php
	//just the conditions that are safistied are especified
	if(2 == 2){
		echo 'Yes, it is true (2 is actually equal to 2) <br/>';
	}
	else{
		echo 'No, it is false <br/>';
	}

	if(2 === '2'){
		echo 'Yes, it is true <br/>';
	}
	else{
		echo 'No, it is false (the integer 2 is no identical to the string 2)<br/>';
	}

	if(2 <> 3){
		echo 'Yes, it is true (2 is different of 3)<br/>';
	}
	else{
		echo 'No, it is false <br/>';
	}

	if(2 !== '2'){
		echo 'Yes, it is true (the integer 2 is not identical to the string 2)<br/>';
	}
	else{
		echo 'No, it is false <br/>';
	}

	if(2 > 3){
		echo 'Yes, it is true <br/>';
	}
	else{
		echo 'No, it is false (2 is less than 3)<br/>';
	}

	if(2 < 3){ 
		echo 'Yes, it is true (2 is less than 3)<br/>';
	}
	else{
		echo 'No, it is false <br/>';
	}

	if(2 <= 3){ 
		echo 'Yes, it is true (2 is not equal to 3 but it is less than 3)<br/>';
	}
	else{
		echo 'No, it is false <br/>';
	}

	if(2 >= 3){
		echo 'Yes, it is true <br/>';
	}
	else{
		echo 'No, it is false (2 is not equal to 3 nor bigger than 3)<br/>';
	}
?>

<?php 
	if (5 == 3 && 5 > 4) {
		echo 'Yes, it is true <br/>';
	}
	else{
		echo 'No, it is false (The first operation is false and the second is true, so its is false (AND))<br/>';
	}

	if (5 == 3 || 5 > 4) {
		echo 'Yes, it is true (The first operation is false and the second is true, so its is true (OR)) <br/>';
	}
	else{
		echo 'No, it is false <br/>';
	}

	if (5 == 3 XOR 5 > 4) {
		echo 'Yes, it is true (The first operation is false and the second is true, so its is true (XOR)) <br/>';
	}
	else{
		echo 'No, it is false <br/>';
	}

	if (!(5 <> 3)) {
		echo 'Yes, it is true <br/>';
	}
	else{
		echo 'No, it is false (The inside operation is true, but we have the deny operator, so its is false (!)) <br/>';
	}
?>