<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "trdb";

// Database Connection Code
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error); // in case of error
}
else{
echo "Database Connected successfully"; // in case of success
}
?>