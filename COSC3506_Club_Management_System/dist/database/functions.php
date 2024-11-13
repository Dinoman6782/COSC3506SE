<?php
function createUser($conn, $firstname, $lastname, $email, $phone, $password)
{
    $sql = "INSERT INTO `users`(`first Name`, `last Name`, `email`, `phone`, `password`) VALUES (?, ?, ?, ?, ?);";
    
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql))
    {
        header("location: ../dist/index.php?error=stmtfailed");
        exit();
    }

    $hasedpwd = password_hash($password, PASSWORD_DEFAULT);
    
    mysqli_stmt_bind_param($stmt, "sssss", $firstname, $lastname, $email, $phone, $hasedpwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../dist/index.php");

    //add something here or in index.php where once this is completed, it displays a message to wait for admin conformation in your email!
    //Probably needs to modify this so it checks if the email actually excits
}

//add a function that does not let you login or start a session unless the boolean value on the table named acceted = 1

//Make a function to send an email if the admin clicks accecpt
?>