<?php
// Create connection
$connection = new mysqli("localhost", "root", "", "qahd_db");
if ($connection->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>