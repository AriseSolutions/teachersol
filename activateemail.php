<?php

require 'PHPMailerAutoload.php';

$mail = new PHPMailer;
$email=$_SESSION['email'];
$activation_code=$_SESSION['activation_code'];
//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'shrikant7295@gmail.com';                 // SMTP username
$mail->Password = '7520020011';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to
$to=$_SESSION['email'];
$mail->setFrom('shrikant7295@gmail.com', 'Mailer');
$mail->addAddress($to);     // Add a recipient

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Account Confirmation Message';
$mail->Body = "
 
Thanks for signing up!
Your account has been created, Now you can login .
 
------------------------<br><br><br><br>

------------------------
 
Please click this link to activate your account:----------------------<br><br><br><br>

http://localhost/facebook_login_with_php/verify.php?email=$email&activation_code=$activation_code "; // Our message above including the link

$mail->send();

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} 

?>




