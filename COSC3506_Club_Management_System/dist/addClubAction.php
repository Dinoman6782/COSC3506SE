<?php 
If(isset($_POST["createClub"]))
{
    session_start();

    $clubName = $_POST["clubName"];
    $clubDiscription = $_POST["clubDiscription"];
    $monthlyPayment = $_POST['monthlyPayment'];
    $bannerImage = file_get_contents($_FILES["bannerImage"]["tmp_name"]);
    $clubOwner = $_SESSION["first Name"] . " " . $_SESSION["last Name"];
    $ownerEmail = $_SESSION["email"];
    $userID = $_SESSION["user_id"];

    require_once './database/db_connection.php';
    require_once './database/functions.php';

    createClub($conn, $userID, $clubName, $clubOwner, $clubDiscription, $ownerEmail, $bannerImage, $monthlyPayment);
}
else{
    header("location: ./signup.php");
    exit();
}
?>