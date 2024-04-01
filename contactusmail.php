<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$postdata=$_POST;
//print_r($postdata);

$host="hs22.name.tools";   
$username="support@stoneinsurancehub.com";
$password="L7kdz2gXF[;o";
$port="465";

$from = "noreply@stoneinsurancehub.com";
$subject = "Contact Us Info";
//$to="support@stoneinsurancehub.com";
$to="sneha.sur@codeclouds.in";
$fullname=$postdata['fullname'];
$phone=$postdata['phone'];
$email=$postdata['email'];
$message=$postdata['message'];

$content = "<p>Hello,You got a new contact info.<p>
<br>
<p>Full Name - ".$fullname."</p>
<p>Contact - ".$phone." </p>
<p>Email - ".$email."</p>
<p>Message - ".$message." </p>";
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = $host;                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = $username;                     //SMTP username
    $mail->Password   = $password;                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    //Recipients
    $mail->setFrom($from , 'Support');
    $mail->addAddress($to, $fullname);     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $content;

    $mail->send();
    $data=[];
    $data['status']=true;
    $data['msg']='Message has been sent';
    echo json_encode($data);
    die();
} catch (Exception $e) {
    // $data="Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    // return json_encode($data);
    $data=[];
    $data['status']=false;
    $data['msg']='Message could not be sent. Mailer Error: {$mail->ErrorInfo}';
    echo json_encode($data);
}



?>