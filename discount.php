<?php

require_once("functions_discount.php");

$total_value = 800.00;
$discount = 10;
$valueWithDiscount = calculate_discount($total_value, $discount);

?>
Total value: R$ <?php echo $total_value; ?> <br>
Discount value: <?php echo $discount; ?>% <br>
Value with discount: R$ <?php echo $valueWithDiscount; ?> <br>