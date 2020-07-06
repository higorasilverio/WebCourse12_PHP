<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Product Catalog</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	</head>

	<body>
		

		<div class="container">
  			<div class="row">
    			<h1>Product Details</h1>
  			</div>
  			<div class="row">
    			<div class="col-md-4">
    				<?php

    					$id_product = $_POST['id_product'];

    					$details[1] = "Chair details";
    					$details[2] = "Stove details";
    					$details[3] = "Router details";
    					$details[4] = "TV details";

    					echo $details[$id_product];
    				?>
    			</div>
  			</div>
		</div>
	</body>
</html>