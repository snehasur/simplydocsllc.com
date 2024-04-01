<?php 
error_reporting(E_ALL); ini_set('display_errors', 1);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'pmail/vendor/autoload.php';
//print_r($_REQUEST);
$mail = new PHPMailer(true);

// $email= $_REQUEST['email'];
// $fullname= $_REQUEST['fullname'];
// $message= $_REQUEST['message'];
// $phone= $_REQUEST['phone'];

$fullname = $_REQUEST['fullname'];
$phone = $_REQUEST['phone'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];



    try {
  
   //$mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
   $mail->Host = 'node.elevateddocs.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'info@lgprocessllc.com';                 // SMTP username
    $mail->Password = 'RxvjF$(_^U0U';                           // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;                           // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to
    //Recipients
     $mail->setFrom('info@lgprocessllc.com','LG Processing LLC');
    $mail->addAddress('info@lgprocessllc.com','LG Processing LLC');     // Add a recipient
   // $mail->addAddress('ellen@example.com');               // Name is optional
  

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Contact mail';

    $mail->Body    = "<table>
    <tr><td>Email: </td><td>".$email."</td>
    </tr>
    <tr><td>Name: </td><td>".$fullname." </td>
    </tr>
    <tr><td>Phone: </td><td>".$phone."</td>
    </tr>
    <tr><td>Message: </td><td>".$message."</td>
    </tr>";

    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    /*$mail->$headers .= 'Organization: Sender Organization\r\n';
    $mail->$headers .= 'MIME-Version: 1.0\r\n';
    $mail->$headers .= 'Content-type: text/plain; charset=iso-8859-1\r\n';*/
    /*$mail->$headers .= 'X-Priority: 3\r\n';
    $mail->$headers .= 'X-Mailer: PHP'. phpversion() .'\r\n';*/

    $mail->send();
   echo 'success';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
?>