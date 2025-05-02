<html>
<head>

<?php

session_start();   

$name = $_SESSION["name"];
$email = $_SESSION["email"];
$FileName=$_SESSION["FileName"];
$subject="恭喜註冊成功";
$content="Content:".$name."恭喜註冊成功";

echo "To:".$name."<br>";
echo "subject:註冊成功"."<br>";
echo "Content:"."<br>";
echo  "Name:".$name."<br>";
echo "恭喜註冊成功"."<br>";
echo "<img src='$FileName' width='10%'>";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = $email;                     //SMTP username
    $mail->Password   = 'cdas oxun mhle lhhf';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;
                                  //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $mail->Charset = "UTF-8";  
    //Recipients
    $mail->setFrom('diegolopezfamily@gmail.com', 'Mailer');
    //$mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient
    $mail->addAddress('iting@nuk.edu.tw');               //Name is optional
    $mail->addAddress($email); 
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    ///$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    // $headers = "MIME-Version: 1.0 \nContent-type: text/html; charset=UTF-8 \n";
    // $headers .= "From: {$From}\r\nReply-To: {$From}\r\nX-Mailer: PHP/".phpversion(). "\n";

    $subject = "=?UTF-8?B?".base64_encode($subject)."?=";
    $mail->Subject = $subject;
    $mail->Body    = $content;
    $mail->addAttachment( $FileName);
    //$mail->header=$headers;
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


?>
</head>

</html>