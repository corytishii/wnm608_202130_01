<?php
include_once "lib/php/functions.php";
$_SESSION['cart'] = [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Ear Audio Store: Purchase Confirmation</title>

	<?php include "parts/meta.php" ?>

</head>
<body>

	<?php include "parts/navbar.php" ?>

	<div class="container">
		<div class="card soft">

			<h2>Purchase Confirmation</h2>

			<div>Thank you for shopping with us.</div>

			<div>
				<a href="product_list.php" class="form-button">Back to shopping</a>
			</div>
		
		</div>
	</div>
	
</body>
</html>