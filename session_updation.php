<!DOCTYPE html>
<html>
<head>
<body>

<?php
session_start();

#Acessing and Updating the values the variables

$_SESSION['Tournament']="Indian Premier League";
$_SESSION['Teamname']="Mumbai indians";
$_SESSION['Captain']="Rohit sharma";
$_SESSION['Trophies won']="3";
$_SESSION['Coach']="Ricky pointing";


print_r($_SESSION);
?>

</body>
</head>
</html> 