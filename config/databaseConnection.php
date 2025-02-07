<?php
$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "usersdatabase";
$conn = new mysqli($servername, $username, $password, $dbname);


// $conn = new mysqli("localhost", "root", "", "cs222db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>