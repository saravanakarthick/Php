<?php
$servername = "localhost";
$username = "root";
$password = "Mycricket@007";


// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Object oriented Connection is established successfully";
?>