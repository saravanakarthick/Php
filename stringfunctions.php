<DOCTYPE html>
<html>
<head>
<body>

<h2>STRING FUNCTIONS</h2><?php

echo strlen("Saravana karthick")."<br>"."<br>";

echo str_word_count(" Erode comes under the green zone")."<br>"."<br>";

echo strrev("Coronavirus")."<br>"."<br>"; 

echo str_replace("world", "Dolly", "Hello world!")."<br>"."<br>"; 

echo strtolower("Ameex Technologies")."<br>"."<br>";

echo strtoupper("iifl tower")."<br>"."<br>";

echo strcasecmp("Hello world!","HELLO WORLD!")."<br>"."<br>";

print_r(str_split("Analytics"));
echo "<br>"."<br>";

echo str_shuffle("Pallikaranai")."<br>"."<br>";

echo number_format("1000000")."<br>";
echo number_format("1000000",2)."<br>";
echo number_format("1000000",2,",",".")."<br>"."<br>";


$arr = array('I','Have','Completed','PHP','Training','Task');
echo join(" ",$arr)."<br>"."<br>";

$str = "Hello World!";
echo $str . "<br>";
echo chop($str,"World!");


$str = "Break String. in to array.";
print_r (explode(" ",$str))."<br>";
echo "<br>"."<br>";

$arr = array('Hello','World!','Beautiful','Day!');
echo implode(" ",$arr)."<br>"."<br>";


parse_str("name=Saravana Karthick &age=22");
echo $name."<br>";
echo $age;
?>

