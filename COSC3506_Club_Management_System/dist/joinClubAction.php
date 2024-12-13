<?php
session_start();
require_once './database/db_connection.php';

if (isset($_GET['club_id']) && isset($_SESSION['user_id'])) {
    $club_id = $_GET['club_id'];
    $user_id = $_SESSION['user_id'];

    $query = "INSERT INTO userclub (user_id, club_id) VALUES (?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ii", $user_id, $club_id);

    if ($stmt->execute()) {
        header("Location: ./club.php?club_id=" . $club_id);
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request.";
}
?>
