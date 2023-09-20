

<?php

$host = "localhost";
$username = "root";
$password = "";
$db_name = "food_db";

// Create a database connection
$conn = new mysqli($host, $username, $password, $db_name);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set character set to UTF-8 if needed
$conn->set_charset("utf8");

?>

  
