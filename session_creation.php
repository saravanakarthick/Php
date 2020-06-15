<!DOCTYPE html>
<html>
<head>
<body>

<?php
session_start();

#Creating session variable

$_SESSION['Tournament']="Indian Premier League";
$_SESSION['Teamname']="Chennai super kings";
$_SESSION['Captain']="MS Dhoni";
$_SESSION['Trophies won']="3";
$_SESSION['Coach']='Fleming';

print_r($_SESSION);
?>

</body>
</head>
</html> 