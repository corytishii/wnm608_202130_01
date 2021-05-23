<?
function makeAuth() {
	return [
		"localhost",  // database host location name
		"earbudstore", // username database
		"HWN%dUIB2", // password database
		"earbud_store" // database name
	];
}



function makePDOAuth() {
	return [
		"mysql:host=localhost;dbname=earbud_store",
		"earbudstore",
		"HWN%dUIB2",
		[PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"]
	];
}

?>