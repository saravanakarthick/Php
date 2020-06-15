<!DOCTYPE html>
<html>
<head>
<body>

<h2>DECISION MAKING STATEMENTS </h2>

<?php
    $a=10;
	  echo("a=$a")."<br>";
	  
	$b=20;
     echo("b=$b")."<br>";
	  
    if($a<$b);
		echo("b is the biggest number")."<br>"."<br>";
		
/* IF ELSE STATEMENT */

    $a=10;
	  echo("a=$a")."<br>";
	$b=20;
     echo("b=$b")."<br>"."<br>";
	  
    if($a<$b)
		echo("b is the biggest number")."<br>"."<br>";
	else
		echo("a is greatest")."<br>";

/* ELSE IF STATEMENT */

    $d = date("D");
     if($d == "Fri")
       echo ("Have a nice weekend!");
    elseif($d == "Sun")
        echo( "Have a nice Sunday!");
    else
       echo ("Have a nice day!");

	
/*SWITCH STATEMENT*/

  $num=20;      
  switch($num){      
   case 10:      
     echo("number is equals to 10");      
     break;      
   case 20:      
     echo("number is equal to 20");      
     break;      
   case 30:      
     echo("number is equal to 30");      
     break;      
   default:      
    echo("number is not equal to 10, 20 or 30");      
}     
?>  
</body>
</head>
</html>


