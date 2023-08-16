<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
//Load Composer's autoloader
ob_start();
require 'vendor/autoload.php';
$mail = new PHPMailer(true);
$OTP = rand(1000,9999);
if (isset($_POST['sendmail'])) {
    $mail->isSMTP();                            // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';              // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                     // Enable SMTP authentication
    $mail->Username   = 'darshan.patel.tops@gmail.com';                     //SMTP username
    $mail->Password   = 'vyoxngpabcryxkqe';  // your password 2step varified 
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;                
    $mail->Port = 587;     //587 is used for Outgoing Mail (SMTP) Server.
    $mail->setFrom('darshan.patel.tops@gmail.com', 'Name');
    $mail->addAddress($_POST['email']);   // Add a recipient
    $mail->isHTML(true);  // Set email format to HTML
    
    $bodyContent = "<h1>HeY!,</h1>: OTP : $OTP";
    $bodyContent .= "<img src='https://images.unsplash.com/photo-1503023345310-bd7c1de61c7d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8aHVtYW58ZW58MHx8MHx8fDA%3D&w=1000&q=80' height='100px' width='100px'>";
    $bodyContent .= "<p style='color:red'>"."This is a email that tops send you From LocalHost using PHPMailer</p>";
    $mail->Body    = $bodyContent."<br>".$_REQUEST["body"];
    $mail->Subject = 'Email from Localhost by tops';
    if(!$mail->send()) {
      echo 'Message was not sent.';
      echo 'Mailer error: ' . $mail->ErrorInfo;
    } else {
      echo 'Message has been sent.';
    }
}

?>
<form method="post">
    <input type="text" name="email" id="email" placeholder="email">
    <input type="text" name="body" id="body" placeholder="message">
    <input type="submit" name="sendmail" id="sendmail">
</form>

<!-- <img src="" alt="" height=""> -->