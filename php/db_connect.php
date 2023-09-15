<?php
// Database configuration
$dbHost = "localhost";
$dbUsername = "your_db_username";
$dbPassword = "your_db_password";
$dbName = "your_db_name";

// Create a database connection
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
