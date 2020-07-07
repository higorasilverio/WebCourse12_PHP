<?php
	$products[1] = 'couch';
	$products[2] = 'table';
	$products[3] = 'chair';
	$products[4] = 'stove';
	$products[5] = 'fridge';
	//var_dump($products);
	foreach ($products as $product) {
		echo "It is possible to buy a product as a $product.<br/>";
		if ($product == 'table') {
			echo "-> This $product could have four $products[3](s).<br/>";
		}
	}

?>