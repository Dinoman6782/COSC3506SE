<?php
// Include database connection file
require 'db_connection.php';

// Function to add a new event
function addEvent($conn, $eventName, $eventDescription, $clubid)
{
    // Prepare the SQL query
    $sql = "INSERT INTO `event_list` (`event_name`, `event_description`, `clubid`) VALUES (?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        // If statement preparation fails, redirect or handle the error
        header("location: ../dist/index.php?error=stmtfailed");
        exit();
    }

    // Bind parameters to the statement
    mysqli_stmt_bind_param($stmt, "ssi", $eventName, $eventDescription, $clubid);
    
    // Execute the statement
    if (mysqli_stmt_execute($stmt)) {
        // Redirect to a success page or show a success message
        header("location: ../dist/index.php?message=eventadded");
    } else {
        // Handle any errors
        header("location: ../dist/index.php?error=eventnotadded");
    }
    
    // Close the statement
    mysqli_stmt_close($stmt);
}

// Example usage
if (isset($_POST['create_event'])) {
    // Collect data from the form
    $eventName = $_POST['event_name'];
    $eventDescription = $_POST['event_description'];
    $clubid = $_POST['clubid']; // Ensure this is passed from the form

    // Call the function to add the event
    addEvent($conn, $eventName, $eventDescription, $clubid);
}
?>
