<?php
$servername = "localhost";
$username = "root"; // use your MySQL username
$password = ""; // use your MySQL password
$dbname = "employee_management_rami";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>