<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>


<?php
//phpinfo();
include_once "lib/php/print_o.php";

echo "Hello World";echo "<br>";
// echo("hello world");echo "<br>";
// echo "Hello World <br>";
// echo "<hr>";

$a = 5;

// interpolation
// echo "There are $a things";echo "<br>";
// echo 'There are '.$a.' things';echo "<br>";

// $b = .5555;

// concatenator operator is the .
// echo "<br>thing-"."thing<br>";
// echo "<br>$a + $b = " . ( $a + $b );echo "<br>";

?>
<!-- <hr>
<div class="username">
	Michael Catanzaro
</div>
<hr> -->

<?php

// $firstname = "Michael";
// $lastname = "Catanzaro";

?>

<div class="username">
<?php 
    // echo "$firstname $lastname<br>"; 
?>
<?php 
// echo $firstname.' '.$lastname; 
?>
</div>
<hr>  

<?php
// ?name=George&tag=h1

// echo "<{$_GET['tag']} class='username-greeting'>Hello, {$_GET['name']}</{$_GET['tag']}>";

?>

<hr>

<?php

// $color1 = "blue";
// $color2 = "red";
// $color3 = "green";

// echo $color3;
// echo "<hr>";

$colors = array("red","green","blue");

// echo $colors[0]."<br>".
// 	$colors[1]."<br>".
// 	$colors[2];

// echo "<br>".count($colors);
// echo "<br>";
// print_r($colors);

// echo "<br>
// 	$colors[0]<br>
// 	$colors[1]<br>
// 	$colors[2]";

// Associative Array

// $colorsAssociative = array(
// 	"red"=>"#f00",
// 	"green"=>"#0f0",
// 	"blue"=>"#00f"
// 	);

?>

<!-- <div style="background-color:<?php echo $colorsAssociative['blue'] ?>">
	This div is blue
</div>
<div style="background-color:<?= $colorsAssociative['green'] ?>">
	This div is green
</div> -->

<?php  /* This is a multi line
          comment */

// Cast a value from one type to another
$colorsObject = (object)$colorsAssociative;

// echo $colorsObject['green']; error - look at it

// echo "
// 	<hr>
// 	$colors[0]<br>
// 	{$colorsAssociative['red']}<br>
// 	{$colorsAssociative[$colors[0]]}<br>
// 	$colorsObject->red<br>
// 	{$colorsObject->{$colors[0]}}<br>
// 	";
// echo "<hr>";
// echo $colors[0]."<br>";
// echo $colorsAssociative['red']."<br>";
// echo $colorsAssociative[$colors[0]]."<br>";
// echo $colorsObject->red."<br>";
// echo $colorsObject->{$colors[0]}."<br>";

?>

<hr>

<?php
// echo $colors; //echo not to be used to print array
// echo "<hr>";
// print_r($colors);
// echo "<hr>";
// print_r($colorsAssociative);
// echo "<hr>";
// echo "<pre>",print_r($colorsObject),"</pre>";


// $user = (object)array(
// 	"name"=>(object)array(
// 		"first"=>"Michael",
// 		"last"=>"Catanzaro"
// 		),
// 	"address"=>(object)array(
// 		"street"=>"123 Main",
// 		"city"=>"San Francisco",
// 		"state"=>"CA",
// 		"zip"=>94114
// 		),
// 	"age"=>29,
// 	"email"=>"miowebdesigns@yahoo.com"
// 	);
// echo "<hr>";
// echo "<pre>",print_r($user),"</pre>";
// echo $user->name->first;echo "<br>";
// echo "$user->email<br>";
// echo $user->address->city.'<br>';
/*  add echo for parts of object array. */

?>



	
</body>
</html>