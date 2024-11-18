<?php 

$host = 'localhost';
$db = 'web_app_db'; // Replace with your database name
$user = 'root'; // Default XAMPP username
$pass = ''; // Default XAMPP password (leave blank)

// Create a connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT `first Name`, `last Name`, `email`, `phone`, `accepted` FROM users";
$Adminresult = $conn->query($sql);

?>