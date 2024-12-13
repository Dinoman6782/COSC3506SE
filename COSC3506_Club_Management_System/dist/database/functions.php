<?php
require 'db_connection.php';


// Function to create a new user
function createUser($conn, $firstname, $lastname, $email, $phone, $password)
{
    // Check if email or phone already exists
    $emailPhoneCheckSql = "SELECT * FROM `users` WHERE `email` = ? OR (`phone` = ? AND `phone` IS NOT NULL);";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $emailPhoneCheckSql)) 
    {
        header("location: ../dist/index.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $email, $phone);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) > 0) 
    {
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

function createClub($conn, $userID, $clubName, $clubOwner, $clubDiscription, $ownerEmail, $bannerImage, $monthlyPayment)
{
    $createClubSQL = "INSERT INTO `clublist`(`user_id`, `clubName`, `clubOwner`, `clubDescription`, `ownerEmail`, `bannerImage`, `monthlyPayment`) VALUES (?, ?, ?, ?, ?, ?, ?);";

    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $createClubSQL)) {
        header("location: ../dist/index.php?error=stmtfailed");
        exit();
    }

    echo "User ID: " . $userID . "<br>";
    echo "Club Owner: " . $clubOwner . "<br>"; 
    echo "Owner Email: " . $ownerEmail . "<br>";

    mysqli_stmt_bind_param($stmt, "issssbi", $userID, $clubName, $clubOwner, $clubDiscription, $ownerEmail, $bannerImage, $monthlyPayment);
    mysqli_stmt_send_long_data($stmt, 5, $bannerImage);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../dist/home.php");
}

function createEvent($conn, $clubID, $eventName, $eventDiscription, $eventDate, $eventStartTime, $eventEndTime, $eventBannerImage) {
    $createEventSQL = "INSERT INTO `eventlist`(`club_Id`, `eventName`, `eventDescription`, `date`, `startTime`, `endTime`, `eventBanner`) VALUES (?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $createEventSQL)) {
        header("location: ../dist/index.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "issssss", $clubID, $eventName, $eventDiscription, $eventDate, $eventStartTime, $eventEndTime, $eventBannerImage);
    mysqli_stmt_send_long_data($stmt, 6, $eventBannerImage);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../dist/club.php?club_id=" . $clubID);
}



function displayAdmin($conn)
{
    $sql = "SELECT `user_id`, `first Name`, `last Name`, `email`, `phone`, `accepted` FROM users";

    $adminResult = mysqli_query($conn, $sql);
    $rowCheck = mysqli_num_rows($adminResult);
    if($rowCheck > 0)
    {
        return $adminResult;
    }
    return null;
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
    else
    {
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
    else
    {

        $accepted = $uidExists["accepted"];
        
        if($accepted == false)
        {
            header("location: ../dist/login.php?error=pendingApproval");
        }
        else
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
}

function emptyInputLogin($email, $password)
{
    $result = false;
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



