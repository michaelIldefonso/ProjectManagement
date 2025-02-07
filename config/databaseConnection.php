<?php
$servername = "127.0.0.1"; // Try 127.0.0.1 instead of localhost
$username = "root";
$password = "admin"; // Check if you set a password
$database = "usersdatabase";
$port = 3306; // Change if MySQL uses a different port

$conn = new mysqli($servername, $username, $password, $database, $port);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");

?>
