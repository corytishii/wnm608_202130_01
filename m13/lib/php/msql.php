<?
include_once "lib/php/functions.php";

SELECT * FROM products ORDER BY `title`; //* gives everything // all items

SELECT * FROM products WHERE `id` = $id; // one item


INSERT INTO products (item,  description) VALUES (`$title`, `$quantity`);



UPDATE products 
	SET 
		title = `$title`,
		description = `$description`
	WHERE
		id = $id;



DELETE FROM products WHERE id = `$id`;





?>