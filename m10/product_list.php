<?
require_once "lib/php/functions.php";
require_once "parts/templates.php";

$pagelimit = 12;
$pageoffset = isset($_GET['page'])?$_GET['page']:0;

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>The Ear Audio Store Product List</title>
	<? include "parts/meta.php" ?>
</head>
<body>
	<? include "parts/navbar.php" ?>

	<div class="container pad push-down">
		<div class="grid gap xs-small md_medium product_list">
		<?
		$data =getData("
			SELECT *
			FROM `products`
			ORDER BY `date_create`DESC
			LIMIT ".($pageoffset*$pagelimit).",$pagelimit
			");

		echo array_reduce($data,'productListTemplate');

		?>

		</div>
	</div>

</body>
</html>