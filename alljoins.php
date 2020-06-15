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

// sql to create table
 $sql = "
CREATE TABLE Books
(
Id INT PRIMARY KEY ,
Name VARCHAR (50) NOT NULL,
Price INT,
CategoryId INT, 
AuthorId INT
)";

mysqli_query($conn, $sql);

$books_values="INSERT INTO Books 
VALUES (1, 'Book-A', 100, 1, 2),
( 2,'Book-B', 200, 2, 2),
( 3,'Book-C', 150, 3, 2),
( 4,'Book-D', 100, 3,1),
( 5,'Book-E', 200, 3,1),
( 6,'Book-F', 150, 4,1),
( 7,'Book-G', 100, 5,5),
( 8,'Book-H', 200, 5,6),
( 9,'Book-I', 150, 7,8)";

mysqli_query($conn, $books_values)

$Authortable ="CREATE TABLE Authors
(
Id INT PRIMARY KEY,
Name VARCHAR (50)
)";

mysqli_query($conn, $Authortable)

$Author_values="INSERT INTO Authors
VALUES (1, 'Author-A'),
(2, 'Author-B'),
(3, 'Author-C'),
(10, 'Author-D'),
(12, 'Author-E')";

mysqli_query($conn, $Authortable)

$Author_values="INSERT INTO Authors
VALUES (1, 'Author-A'),
(2, 'Author-B'),
(3, 'Author-C'),
(10, 'Author-D'),
(12, 'Author-E')";

mysqli_query($conn,$Author_values);

$category_table="CREATE TABLE Categories
(
Id INT PRIMARY KEY,
Name VARCHAR (50) NOT NULL
)";
mysqli_query($conn,$category_table);

$category_values="INSERT INTO Categories 
VALUES (1, 'Cat-A'),
(2, 'Cat-B'),
(3, 'Cat-C'),
(7, 'Cat-D'),
(8, 'Cat-E'),
(4, 'Cat-F'),
(10,'Cat-G'),
(12,'Cat-H'),
(6, 'Cat-I')";
mysqli_query($conn,$category_values);


#Inner join


$Inner_join="SELECT Books.CategoryId, Books.Name, Categories.Id, Categories.Name
FROM Books
INNER JOIN Categories
ON Books.CategoryId = Categories.Id";

mysqli_query($conn,$Inner_join);










?>