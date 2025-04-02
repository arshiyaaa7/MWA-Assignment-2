<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "gandharva";

// Create database connection
$conn = new mysqli($servername, $username, $password, $database);

// Check if connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
