<?php
$servername = "localhost";
$username = "root";  // Change this if needed
$password = "";  // Change if you set a MySQL password
$database = "company";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
S