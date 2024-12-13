<?php
session_start();
require_once './database/db_connection.php';

if (isset($_POST['event_id'], $_POST['user_id'], $_POST['action'])) {
    $event_id = intval($_POST['event_id']);
    $user_id = intval($_POST['user_id']);
    $action = $_POST['action'];

    if ($action === 'add') {
        $query = "INSERT INTO userEvent (user_id, event_id) VALUES ($user_id, $event_id)";
    } elseif ($action === 'remove') {
        $query = "DELETE FROM userEvent WHERE user_id = $user_id AND event_id = $event_id";
    }

    if (mysqli_query($conn, $query)) {
        echo "Success";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request.";
}
?>

