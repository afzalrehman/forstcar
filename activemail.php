<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);
try {
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'noorulahad606@gmail.com';
    $mail->Password = 'kulbbsejofmqiztc';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('noorulahad606@gmail.com', 'noor');
    $mail->addAddress('muhammadafzal1903@gmail.com', 'Mazaak');

    $mail->Subject = 'Test Email';
    $mail->Body = 'This is a test email sent using PHPMailer.';

    $mail->send();
    echo 'Email sent successfully!';
} catch (Exception $e) {
    echo "Failed to send email. Error: {$mail->ErrorInfo}";
}
?>