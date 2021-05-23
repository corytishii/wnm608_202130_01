<?


include_once "../lib/php/functions.php";

$output = [];

if(!isset($_GET['type'])) {
	$output['error'] = "No Type";
} else switch($_GET['type']) {

	case "products-all":
	$output['result'] = getData(
		"SELECT *
		FROM `products`
		ORDER BY date_create DESC
		limit 12"
	);
	break;

	case "product-one":
	if(!isset($_POST['id']))
		$output['error'] = "No ID";
	$output['result'] = getData(
		"SELECT *
		FROM `products`
		WHERE `id` = '{$_POST['id']}'"
	);
	break;

	case "products-search":
	if(!isset($_POST['search']))
		$output['error'] = "No Search Term";
	$output['result'] = getData(
		"SELECT * 
		FROM `products`
		WHERE 
			`title` LIKE '%{$_POST['search']}%' OR
			`description` LIKE '%{$_POST['search']}%' OR
			`category` LIKE '%{$_POST['search']}%'
			ORDER by date_create DESC
			limit 12"
	);

	case "products-filter";
		if(!isset($_POST['type']) || !isset($_POST['value']))
			$output['error'] = "Incorrect Data";
		$output['result'] = getData(
			"SELECT *
			FROM `products`
			WHERE `{$_POST['type']}` = '{$_POST['value']}'
			ORDER BY `date_create` DESC
			limit 12"
		);
		break;
}

die(json_encode(
	$output,
	JSON_UNESCAPED_UNICODE|
	JSON_NUMERIC_CHECK
	));



?>