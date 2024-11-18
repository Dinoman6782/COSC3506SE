<?php
require 'db_connection.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:\Users\muhai\Documents\COSC3506SE\PHPMailer\src\Exception.php';
require 'C:\Users\muhai\Documents\COSC3506SE\PHPMailer\src\PHPMailer.php';
require 'C:\Users\muhai\Documents\COSC3506SE\PHPMailer\src\SMTP.php';

// Function to create a new user
function createUser($conn, $firstname, $lastname, $email, $phone, $password)
{
    // Check if email already exists
    $emailCheckSql = "SELECT * FROM `users` WHERE `email` = ?";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $emailCheckSql)) {
        header("location: ../dist/index.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) > 0) {
        header("location: ../dist/index.php?error=emailexists");
        exit();
    }

    mysqli_stmt_close($stmt);

    // Insert new user
    $sql = "INSERT INTO `users`(`first Name`, `last Name`, `email`, `phone`, `password`, `accepted`) VALUES (?, ?, ?, ?, ?, 0)";
    
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../dist/index.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "sssss", $firstname, $lastname, $email, $phone, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    // Redirect with a message to wait for admin confirmation
    header("location: ../dist/index.php?message=waitforapproval");
}

function uidExists($conn, $email)
{
    $sql = "SELECT * FROM users WHERE email = ?;";

    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql))
    {
        header("location: ../dist/login.php?error=stmtFailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);
    if($row = mysqli_fetch_assoc($resultData))
    {
        return $row;
    }
    else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function loginUser($conn, $email, $password)
{
    $uidExists = uidExists($conn, $email);

    if($uidExists === false)
    {
        header("location: ../dist/login.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $uidExists["password"];

    $checkpwd = password_verify($password, $pwdHashed);

    if ($checkpwd === false)
    {

        header("location: ../dist/login.php?error=wronglogin");
    }
    else if ($checkpwd === true)
    {
        session_start();

        $_SESSION["user_id"] = $uidExists["user_id"];
        $_SESSION["email"] = $uidExists["email"];
        $_SESSION["phone"] = $uidExists["phone"];
        $_SESSION["first Name"] = $uidExists["first Name"];
        $_SESSION["last Name"] = $uidExists["last Name"];
        $_SESSION["login_time"] = time();
        $_SESSION["role"] = $uidExists["role"];
        header("location: ../dist/viewAnalytics.php");
    }
}

function emptyInputLogin($email, $password)
{
    $result;
    if(empty($email) || empty($password))
    {
        $result = true;
    }
    else
    {
        $result = false;
    }
    return $result;
}


// Function to check if the user can log in
function canLogin($conn, $email)
{
    $sql = "SELECT `accepted` FROM `users` WHERE `email` = ?";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        return false; // Statement failed
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);

    mysqli_stmt_close($stmt);

    return $row && $row['accepted'] == 1;
}

// Function to send an approval email
function sendApprovalEmail($email, $firstName)
{
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Replace with your mail server
        $mail->SMTPAuth = true;
        $mail->Username = 'mohaisinshahadu@gmail.com'; // Your email
        $mail->Password = 'mkqe dqnz qmmh sxki'; // Your email password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Recipients
        $mail->setFrom('mohaisinshahadu@gmail.com', 'CEMS');
        $mail->addAddress($email, $firstName);

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Account Approved';
        $mail->Body    = "Dear $firstName, <br>Your account has been approved. You can now log in and access your account.<br>Best Regards, <br>YourAppName Team";

        $mail->send();
        return true;
    } catch (Exception $e) {
        error_log("Email failed to send: " . $mail->ErrorInfo);
        return false;
    }
}
