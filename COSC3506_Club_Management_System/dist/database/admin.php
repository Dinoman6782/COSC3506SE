<?php
session_start();
require 'db_connection.php'; // Include your database connection
require 'functions.php';     // Include your functions, including PHPMailer setup

// Check if the request method is POST (indicating form submission)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the data from the POST request
    $userId = $_POST['user_id'];           // User ID to approve
    $userEmail = $_POST['email'];          // User's email address
    $userFirstName = $_POST['firstName'];  // User's first name
    $userLastName = $_POST['lastName'];    // User's last name

    // Update the user's `accepted` status in the database
    $sql = "UPDATE `users` SET `accepted` = 1 WHERE `id` = ?";
    $stmt = mysqli_stmt_init($conn);

    if (mysqli_stmt_prepare($stmt, $sql)) {
        // Bind parameters and execute the statement
        mysqli_stmt_bind_param($stmt, "i", $userId);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        // Combine the first name and last name for the email
        $userName = $userFirstName . ' ' . $userLastName;

        // Send the approval email
        if (sendApprovalEmail($userEmail, $userName)) {
            echo "User approved and email sent successfully!";
        } else {
            echo "User approved, but failed to send email.";
        }
    } else {
        echo "Failed to approve the user. Please try again.";
    }
}
?>
