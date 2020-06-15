<!DOCTYPE html>
<html>
<head>
<body>

<?php
session_start();

#Destroying the session variable

session_unset();

print_r($_SESSION);
?>

</body>
</head>
</html> 