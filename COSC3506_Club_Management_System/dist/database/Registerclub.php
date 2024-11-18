<?php
session_start(); // Start the session to access user information

require 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $clubName = $_POST['club_name'];
    $clubDescription = $_POST['club_description'];
    
    // Assuming you have the user's ID stored in the session as 'user_id'
    if (isset($_SESSION['user_id'])) {
        $createdBy = $_SESSION['user_id'];

        // Prepare and bind
        $stmt = $conn->prepare("INSERT INTO `clubs` (`club_name`, `club_description`, `created_by`) VALUES (?, ?, ?)");
        $stmt->bind_param("ssi", $clubName, $clubDescription, $createdBy);

        if ($stmt->execute()) {
            echo "Club created successfully!";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "User not logged in.";
    }

    $conn->close();
}
?>
