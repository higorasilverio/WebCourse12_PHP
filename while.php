<?php
	$number = 4;
	while ($number <= 10) {
		if ($number == 6) {
			$number = $number + 1;
			continue;
		}
		if ($number == 9) {
			break;
		}
		echo $number;
		echo '<br/>';
		$number = $number + 1;
	}

?>