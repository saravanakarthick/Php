<DOCTYPE html>
<html>
<head>
<body>

<h2>LOOPING STATEMENTS </h2>

<?php 
   for($a=1;$a<=5;$a++)	
	   echo "The number is ".$a."<br>";
   
/* WHILE LOOP*/ 

	 $i=1;
	$sum=0;
	while($i<=100)
	 
     {
	   $sum=$sum+$i;
	   $i++;
	  }
    echo "<br>";	  
	echo "Sum= " . $sum,"<br>";	
  
/*FOR EACH LOOP*/

     $arr = array (10, 20, 30, 40, 50, 60); 
    foreach ($arr as $val) {  
        echo " <br> $val "."<br>"; 
		echo "<br>";
    } 
	
	
/*DO WHILE*/

  $xyz = 1;
  do 
  {    
     echo "Current value: $xyz <br>";
     $xyz++;
   } while ($xyz < 5);
?>

</body>
</html> 
   </body>
   </head>
   </html>	