<?php
	function calculate_discount($total_value, $discount){
		$valueWithDiscount = $total_value * ($discount / 100);
		return $total_value - $valueWithDiscount;
	}
?>