<?php
$servername = getenv('DB_HOST') ?: 'localhost';
$username = getenv('DB_USER') ?: 'root';
$password = getenv('DB_PASS') ?: '0661621418maMA';
$dbname = getenv('DB_NAME') ?: 'priceless_pages';

// Create connection using mysqli
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection securely
if ($conn->connect_error) {
    error_log("Database connection failed: " . $conn->connect_error); 
    die("Connection failed. Please try again later."); 
}
?>
