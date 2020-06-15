<!DOCTYPE html>
<html>
<head>
<body>

<h2> ARRAY TYPES</h2>

<?php

$iplteams = array("CSK", "MI", "RCB");
echo "I like " . $iplteams[0] . ", " . $iplteams[1] . " and " . $iplteams[2] . "<br>". "<br>";

/* MULTIDIMENSIONAL ARRAYS */

$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);

echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>". "<br>";


/* SORTING ARRAYS */

$numbers = array(40, 61, 2, 22, 13); 
sort($numbers); 
  
$arrlength = count($numbers); 
for($x = 0; $x < $arrlength; $x++) { 
    echo $numbers[$x]; 
    echo "<br>". "<br>"; 
}


/* ASSOCIATIVE ARRAYS */


$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";
?>

