<?php
session_start();
require_once './database/db_connection.php';

if (isset($_POST['club_id'], $_POST['user_id'], $_POST['action'])) {
    $club_id = intval($_POST['club_id']);
    $user_id = intval($_POST['user_id']);
    $action = $_POST['action'];

    if ($action === 'add') {
        $query = "INSERT INTO userclub (user_id, club_id) VALUES ($user_id, $club_id)";
    } elseif ($action === 'remove') {
        $query = "DELETE FROM userclub WHERE user_id = $user_id AND club_id = $club_id";
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