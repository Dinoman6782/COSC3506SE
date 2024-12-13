<?php 
If(isset($_POST["createEvent"]))
{
    session_start();

    $clubID = $_POST["clubId"];
    $eventName = $_POST["eventName"];
    $eventDiscription = $_POST["eventDiscription"];
    $eventDate = $_POST['eventDate'];
    $eventStartTime = $_POST["eventStartTime"];
    $eventEndTime = $_POST["eventEndTime"];
    $eventBannerImage = file_get_contents($_FILES["eventBannerImage"]["tmp_name"]);

    require_once './database/db_connection.php';
    require_once './database/functions.php';

    createEvent($conn, $clubID, $eventName, $eventDiscription, $eventDate, $eventStartTime, $eventEndTime, $eventBannerImage);
}
else{
    header("location: ./signup.php");
    exit();
}
?>