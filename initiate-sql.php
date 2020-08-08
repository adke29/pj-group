<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE DATABASE IF NOT EXISTS pj_group";
if (mysqli_query($conn, $sql)) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . mysqli_error($conn);
}
$dbname = "pj_group";
$conn = new mysqli($servername, $username, $password, $dbname);


$sql = "CREATE TABLE IF NOT EXISTS customer(id INT(10) AUTO_INCREMENT PRIMARY KEY, name VARCHAR(50) NOT NULL, username VARCHAR(30) NOT NULL,email VARCHAR(50) NOT NULL,password VARCHAR(30)NOT NULL,ref VARCHAR(10)NOT NULL)";
if(mysqli_query($conn, $sql)) {
  echo "Table created successfully";
}else {
  echo "Error creating table: ".mysqli_error($conn);
}


?>