<?php
include __DIR__ . '/../config/databaseConnection.php';

$result = $conn->query("SELECT * FROM users");

if ($result) {
    echo "Query successful! Found " . $result->num_rows . " users.";
} else {
    echo "Query failed: " . $conn->error;
}
?>
