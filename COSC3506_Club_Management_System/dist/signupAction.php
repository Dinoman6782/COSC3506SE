<?php
If(isset($_POST["submit"]))
{
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $phone = $_POST['phone'];
    $email = $_POST["email"];
    $password = $_POST["password"];

    require_once './database/db_connection.php';
    require_once './database/functions.php';

    createUser($conn, $firstname, $lastname, $email, $phone, $password);
}
else{
    header("location: ../signup.php");
    exit();
}
?>