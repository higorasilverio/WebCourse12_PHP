<?php
	$news = array();
	$news[1]['Title'] = "News title 1";
	$news[1]['Content'] = "News content 1";
	$news[2]['Title'] = "News title 2";
	$news[2]['Content'] = "News content 2";
	$news[3]['Title'] = "News title 3";
	$news[3]['Content'] = "News content 3";
	//var_dump($news);
	$idx = 1;
	/*while ($idx <= 3) {
		echo $news[$idx]['Title'];
		echo '<br/>';
		echo $news[$idx]['Content'];
		echo '<br/><br/>';
		$idx++;
	}*/
	/*do {
		echo $news[$idx]['Title'];
		echo '<br/>';
		echo $news[$idx]['Content'];
		echo '<br/><br/>';
		$idx++;
	} while ($idx <= 3);*/
	for ($idx = 1; $idx <= 3; $idx++) { 
		echo $news[$idx]['Title'];
		echo '<br/>';
		echo $news[$idx]['Content'];
		echo '<br/><br/>';
	}
?>