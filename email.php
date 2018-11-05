<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
session_start();
// unset($_SESSION['cart']);
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';                 // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'desmondkz1110@gmail.com';          // SMTP username
    $mail->Password = 'Desmondkz5683,.';                  // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('Auto-generated@gmail.com', 'ShoeVilla Customer Service');
    $mail->addAddress('KANI0011@e.ntu.edu.sg');           // Add a recipient

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');       // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');  // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Purchase Confirmation';
    $mail->Body    = 'Hi';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}

?>