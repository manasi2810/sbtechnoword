<?php
   //Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['send'])) {
    $name = $_POST['name'];
     $email = $_POST['email'];
      $subject = $_POST['subject'];
   $message = $_POST['message'];
    

//Load Composer's autoloader
require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Port       = 26;    
    $mail->Username   = 'it.support@sbexpresscargo.com';                     //SMTP username
    $mail->Password   = 'xxsuvqilcgvsbggv';                               //SMTP password
   $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
     $mail->Port = '587';                                  //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('it.support@sbexpresscargo.com', 'Website');
    $mail->addAddress('info@sbtechnoworld.com', 'SBTW');     //Add a recipient
   
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Enquiry ';
    $mail->Body    = "Sender Name -$name <br> Sender Email - $email<br> Subject- $subject <br> Message -$message"  ; 
   

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}
?>