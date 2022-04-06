<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_regd";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE userdata(
userid int NOT NULL AUTO_INCREMENT,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(30) NOT NULL UNIQUE,
pasword VARCHAR(30) NOT NULL,
phone VARCHAR(30) NOT NULL,
PRIMARY KEY (userid)
)";

if ($conn->query($sql) === TRUE) {
  echo "Table empdata created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>