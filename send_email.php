



<?php
// Load PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

// Create a new instance of PHPMailer
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host       = 'mail.ajsdigiworld.com';  // Bluehost SMTP server
    $mail->SMTPAuth   = true;
    $mail->Username   = 'contact-me@ajsdigiworld.com';  // Your Bluehost email
    $mail->Password   = 'ArdnaxelaNat!0712';          // Your email password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption
    $mail->Port       = 587;                            // SMTP port

    // Recipients
    $mail->setFrom('contact-me@ajsdigiworld.com', 'Your Name');
    $mail->addAddress('contact-me@ajsdigiworld.com', 'Contact Me'); // Add recipient

    // Content
    $mail->isHTML(true);                                  
    $mail->Subject = 'Form Submission';
    $mail->Body    = '<b>This is a test message sent from PHPMailer!</b>';
    $mail->AltBody = 'This is a test message sent from PHPMailer!';

    // Send the email
    $mail->send();
    echo 'Message has been sent successfully';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}