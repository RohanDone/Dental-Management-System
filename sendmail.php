<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './phpmailer/src/Exception.php';
require './phpmailer/src/PHPMailer.php';
require './phpmailer/src/SMTP.php';




static $mail = new PHPMailer(true);

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'shubham412805@gmail.com';
$mail->Password = 'weuylckuqzxvymym';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
$mail->setFrom("shubham412805@gmail.com");
$mail->isHTML(true);

function sendAppointment($email)
{
    global $mail;

    $mail->addAddress($email);
    $message = "
               <h3> Thank you for booking appointment</h3><br> ";
    $mail->Subject = "Appoinment Booked Successfully I Love You";
    $mail->Body = $message;

    $mail->send();

    return true;
}


?>