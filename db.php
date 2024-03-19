<?php
// Define the database connection parameters
$host = 'localhost';
$user = 'admin';
$password = 'admin';
$dbname = 'vehigo_express_bustransport';

// Create a new database connection
$conn = new mysqli($host, $user, $password, $dbname);

// Check for errors
if ($conn->connect_error) {
  die('Connection failed: ' . $conn->connect_error);
}
?>