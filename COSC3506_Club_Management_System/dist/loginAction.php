<?php
If(isset($_POST["login"]))
{
$email = $_POST["email"];
$password = $_POST["password"];

require_once './database/db_connection.php';
require_once './database/functions.php';

if (emptyInputLogin($email, $password) !== false)
{
    header("location: ./dist/login.php?error=emptyinput");
    exit();
}

loginUser($conn, $email, $password);

}
else
{
    header("location: ./index.php");
    exit();
}

?>
