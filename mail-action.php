<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET POST");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
//session_start();
$requestData = !empty($_REQUEST) ? $_REQUEST : '';
// echo '<pre>';
// print_r($requestData);
// die();
// Function to configure and send email
$to = $requestData['email'];
$toName = $requestData['firstName'];
$subject = 'Feedback Form';
//$body = $requestData['message'];

$emailBody = ' <!DOCTYPE html> <html> <head> <style> body { font-family: Arial, sans-serif; } .container { margin: 0 auto; padding: 5px; max-width: 600px;} .field { margin-bottom: 15px; } .label { font-weight: bold; } </style> </head> <body> <div class="container"> <div class="field"> <span class="label">First Name:</span> ' . $requestData['firstName'] . ' </div> <div class="field"> <span class="label">Surname:</span> ' . $requestData['lastName'] . ' </div> <div class="field"> <span class="label">Phone:</span> ' . $requestData['phone'] . ' </div> <div class="field"> <span class="label">Email:</span> ' . $requestData['email'] . ' </div> <div class="field"> <span class="label">Message:</span> ' . nl2br($requestData['message']) . ' </div> </div> </body> </html> ';

$mail = new PHPMailer(true);

try {

    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'mail.goquoterocket.com';
    $mail->Username   = 'support@goquoterocket.com';
    $mail->Password   = '{Ae]mvhUMvka';
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;
    $mail->setFrom($to, $toName);
    $mail->addAddress('support@goquoterocket.com', 'Support');

    //Content
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body    = $emailBody;
    $mail->send();
    $mailResponse = array(
        "status" => "Success",
        "Code" => 1,
        "status_message" => 'Thanks for submitting your message. Our team will review it and get in touch with you at our earliest convenience.',
    );

    echo json_encode($mailResponse);
    //die();
} catch (Exception $e) {
    $mailErrorResponse = array(
        "status" => "Error",
        "Code" => 2,
        "status_message" => "Message could not be sent. Mailer Error: {$mail->ErrorInfo}",
    );
    echo json_encode($mailErrorResponse);
    //die();
}


// Example usage
