<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Variables</title>
	</head>

	<body>
		
		<?php 
			//int
			$integer_value = 1 * 4;
			echo $integer_value;
			echo '<br/>';
			$integer_value = $integer_value * 2;
			echo $integer_value;
			echo '<br/>';

			//float
			$floating_value = -10.70;
			echo $floating_value;	
			echo '<br/>';

			//boolean
			$boolean_value = true;
			echo $boolean_value;
			echo '<br/>';

			//string
			$string_value = 'This is a STRING';
			echo $string_value;
			echo '<br/>';

			//string and integer - concatenate
			echo "$string_value concatenated with a integer: $integer_value";
			echo '<br/>';
			echo '<br/>';

			//arrays
			$messaging[1] = 'Message one';
			$messaging[2] = 'Message two';
			$messaging[3] = 'Message three';
			$messaging[4] = 'Message four';
			$messaging[5] = 'Message five';
			echo $messaging[3];
			echo '<br/>';
			echo '<br/>';
			var_dump($messaging);
			echo '<br/>';
			echo '<br/>';
			print_r($messaging);
			$messaging_alpha['a'] = 'Message A';
			$messaging_alpha['b'] = 'Message B';
			$messaging_alpha['c'] = 'Message C';
			echo '<br/>';
			echo '<br/>';
			echo $messaging_alpha['b'];
			echo '<br/>';
			echo '<br/>';
			var_dump($messaging_alpha);
			echo '<br/>';
			echo '<br/>';
			print_r($messaging_alpha);
			echo '<br/>';
			echo '<br/>';
			$msg = array('a' => 'First', 'b' => 'Second', 'c' => 'Third');
			print_r($msg);
			echo '<br/>';
			echo '<br/>';

			//multidimentional arrays
			$chessboard[8]['a'] = 'Black Tower 1';
			$chessboard[8]['b'] = 'Black Bishop 1';
			$chessboard[8]['c'] = 'Black Horse 1';
			$chessboard[8]['d'] = 'Black Queen';
			$chessboard[8]['e'] = 'Black King';
			$chessboard[8]['f'] = 'Black Horse 2';
			$chessboard[8]['g'] = 'Black Bishop 2';
			$chessboard[8]['h'] = 'Black Tower 2';
			$chessboard[7]['a'] = 'Black Pawn 1';
			$chessboard[7]['b'] = 'Black Pawn 2';
			$chessboard[7]['c'] = 'Black Pawn 3';
			$chessboard[7]['d'] = 'Black Pawn 4';
			$chessboard[7]['e'] = 'Black Pawn 5';
			$chessboard[7]['f'] = 'Black Pawn 6';
			$chessboard[7]['g'] = 'Black Pawn 7';
			$chessboard[7]['h'] = 'Black Pawn 8';
			$chessboard[6] = 
			array('a' => '', 'b' => '', 'c' => '', 'd' => '', 'e' => '', 'f' => '', 'g' => '', 'h' => '');
			$chessboard[5] = 
			array('a' => '', 'b' => '', 'c' => '', 'd' => '', 'e' => '', 'f' => '', 'g' => '', 'h' => '');
			$chessboard[4] = 
			array('a' => '', 'b' => '', 'c' => '', 'd' => '', 'e' => '', 'f' => '', 'g' => '', 'h' => '');
			$chessboard[3] = 
			array('a' => '', 'b' => '', 'c' => '', 'd' => '', 'e' => '', 'f' => '', 'g' => '', 'h' => '');
			$chessboard[1]['a'] = 'White Tower 1';
			$chessboard[1]['b'] = 'White Bishop 1';
			$chessboard[1]['c'] = 'White Horse 1';
			$chessboard[1]['d'] = 'White Queen';
			$chessboard[1]['e'] = 'White King';
			$chessboard[1]['f'] = 'White Horse 2';
			$chessboard[1]['g'] = 'White Bishop 2';
			$chessboard[1]['h'] = 'White Tower 2';
			$chessboard[2]['a'] = 'White Pawn 1';
			$chessboard[2]['b'] = 'White Pawn 2';
			$chessboard[2]['c'] = 'White Pawn 3';
			$chessboard[2]['d'] = 'White Pawn 4';
			$chessboard[2]['e'] = 'White Pawn 5';
			$chessboard[2]['f'] = 'White Pawn 6';
			$chessboard[2]['g'] = 'White Pawn 7';
			$chessboard[2]['h'] = 'White Pawn 8';
			print_r($chessboard[8]);
			echo '<br/>';
			print_r($chessboard[7]);
			echo '<br/>';
			print_r($chessboard[6]);
			echo '<br/>';
			print_r($chessboard[5]);
			echo '<br/>';
			print_r($chessboard[4]);
			echo '<br/>';
			print_r($chessboard[3]);
			echo '<br/>';
			print_r($chessboard[2]);
			echo '<br/>';
			print_r($chessboard[1]);
			echo '<br/>';

		?>


	</body>
</html>