<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ramya_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE aiclformtable(
firstName VARCHAR(30) NOT NULL,
lastName VARCHAR(30) NOT NULL,
contact VARCHAR(10) NOT NULL,
emailId VARCHAR(20) NOT NULL,
messagetext VARCHAR(50) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
  echo "Table aiclformtable created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->