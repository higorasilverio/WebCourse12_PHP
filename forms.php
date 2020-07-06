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
				<h1>Product Catalog</h1>
			</div>
  			<div class="row">
    			<div class="col-md-4">
    				<form role="form" action="details.php" method="post">
					  <div class="form-group">
					    <label for="Product">Product name:</label>
					    <select class="form-control" name="id_product" id="id_product">
					    	<option value="1">Chair</option>
							<option value="2">Stove</option>
							<option value="3">Wi-Fi Router</option>
							<option value="4">TV 29"</option>
					   	</select>
					  </div>
					  <button type="submit" class="btn btn-default">See details</button>
					</form>
    			</div>
    			<div class="col-md-4"></div>
    			<div class="col-md-4"></div>
  			</div>
		</div>
	</body>
</html>