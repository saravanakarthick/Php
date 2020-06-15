<?php
$servername = "localhost";
$username = "root";
$password = "Mycricket@007";
$dbname = "practice";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Procedural Connection is established successfully";
?>