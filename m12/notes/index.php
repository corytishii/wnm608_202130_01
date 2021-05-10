<?php 
echo "<div>Hi World</div>"; //using the "php" is optional// //it's preferred to use "<?= for the first column/line" "<!-- is a comment in html for multiple lines --" "//" is a comment in php, but for single lines" 


?>

<?=
?>

<?= "<div>Hi World</div>";

?>

<?
echo "<div>Hi World</div>";

// variables

$alpha = 5;

echo $alpha;

// string interpolation (a variable occuring in a string, this can update) (useful for a template) (a different string that can have several variables)

echo '<div>I have $alpha items for sale</div>';
echo "<div>I have $alpha items for sale</div>";
echo "<div>I have ".$alpha." items for sale</div>";
?>
<?= $alpha     //echo ?> <!-- comment --> 
<hr>
<?
// float
$fl = 0.333;
// integer  //"=" is an assignment opperator (assinging values to variables); "==" is an equal sign
$int = 3;

$str = "String Value"; //'' or "" can be used; unless trying to interpolate a variable "$al" represents "$alpha" as well

// Boolean //Boolean value
$bool = true;
$bool = false;


echo $fl + $int; //we cannot drag our "php" files onto a browser like we did in "html", it will only show the code & NOT the result of the code. (this one is just adding 2 numbers together)

echo $fl - $int;

echo $fl * $int;

echo $fl / $int;

echo $fl % $int; // "%" represents telling the "$fl" is divided by that number "$int" what the whole number is // modulus = %

echo ($fl + $int) + 5;

echo ($fl + $int) * 5;

echo $fl + $int * 5;

$firstname = "Cory";
$lastname = "Ish";
$fullname = "$firstname $lastname";
echo $fullname;
echo $fullname." ".$lastname;

?>
<hr>
<?
// superglobal variable
echo "<div>My name is {$_GET['name']}</div>"; //type "?name=Cory" on the browser link (url string) & the page should say "My name is Cory" from "My name is" ; "?" is a variable

echo "<div>My name is {$_GET['name']}. I like {$_GET['like']} </div>"; //type "&like=chocolate berries" in browser link (url string) & the page should say "My name is Cory I like chocolate berries" NEVER use "{$_GET['name']}" for any personal information. Use this ONLY for simple variables.

echo "<div>My name is {$_POST['name']}</div>"; //uses "system variable", a hidden array that's used to pass information from Point A to Point B (system variable) (do mathmatics in php, do calculations with dimmensions with pixels)

//usually doesn't use "{$_GET['name']}", rather uses "{$_POST['name']}"

?>
<hr>
<?
// arrays (mainly in php & to) (index & the position) (index by the numbers 0, 1, 2) (index is always 1 less than the position)
$colors = array("red","green","blue"); //arrays start counting at "0"; going "0", "1","2"

echo $colors[1];

echo $colors[1]."<br>";

echo count($colors)."<br>";

// associative array

$assoc = [
	"red" => "#f00",
	"green" => "#0f0",
	"blue" => "#00f"
];

echo $assoc['green']."<br>";
?>
<div style="color:<?= $assoc['green'] ?>">This is green</div>
<div style="color:<?= $assoc['green'] ?>; text-transform:uppercase;">This is green</div>
<hr>
<? //close the "php" tag before using "html"
//casting (redundant, but it exists)
$c = "$alpha"; 
$d = $c*1;

echo "<hr>"; //we can always  write our "html" in "php" using "echo" statement

echo $colors;
echo "<hr>";

print_r($colors); //this is something that we use to print arrays

function print_p($v) {
	echo "<pre>",print_r($v),"</pre>";
}

print_p($colors);


?>