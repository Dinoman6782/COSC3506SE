<?php
require_once './database/db_connection.php';
require './PHPMailer-6.9.3/PHPMailer-6.9.3/src/Exception.php';
require './PHPMailer-6.9.3/PHPMailer-6.9.3/src/PHPMailer.php';
require './PHPMailer-6.9.3/PHPMailer-6.9.3/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['email'], $_POST['user_id'], $_POST['action'])) {
    $email = $_POST['email'];
    $user_id = intval($_POST['user_id']);
    $action = $_POST['action'];

    $accepted = $action === 'accept' ? 1 : 0;

    // Update the accepted status in the database
    $updateQuery = "UPDATE users SET accepted = $accepted WHERE user_id = $user_id";
    if (mysqli_query($conn, $updateQuery)) {
        echo "User status updated successfully.";

        // Send email
        $subject = $action === 'accept' ? 'You have been accepted!' : 'Your acceptance has been revoked';
        $message = $action === 'accept' ? 'Congratulations! You have been accepted.' : 'Sorry, your acceptance has been revoked.';

        $mail = new PHPMailer(true);
        try {
            //Server settings
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'megshah@algomau.ca'; // Your Gmail address
            $mail->Password   = 'apuy jrym dcyy dauu'; // Your Gmail password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;

            //Recipients
            $mail->setFrom('megshah@algomau.ca', 'Mailer');
            $mail->addAddress($email);

            // Content
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = $message;

            $mail->send();
            echo 'Email sent successfully.';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        echo "Error updating user status: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request.";
}

?>



