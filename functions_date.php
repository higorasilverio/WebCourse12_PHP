<?php
	//date = Y - m - d
	$date = date("d/m/Y H:i");
	echo "$date<br/>";

	//strtotime
	$initial_date = '2020-07-07';
	$final_date = '2020-07-14';
	$initial_time = strtotime($initial_date);
	echo "$initial_time <br/>";
	$final_time = strtotime($final_date);
	echo "$final_time <br/>";
	$time_difference = $final_time - $initial_time;
	echo "$time_difference <br/>";
	$difference_days = $time_difference / (24*60*60); //converting the time from seconds to days
	echo "$difference_days <br/>";
?>