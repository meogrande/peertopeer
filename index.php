<?php
$servername = "lab06_cattedra1";
$username = "peertopeer";
$password = "peertopeer";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>