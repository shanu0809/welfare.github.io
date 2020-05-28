
<!DOCTYPE html>
<head></head>
<?php
require "connection.php";
require_once('PHPMailerAutoload.php');
require_once('mail files/class.phpmailer.php');
require_once( 'mail files/class.smtp.php');
include('../credential.php');

if(isset($_POST['submit'])& isset($_POST['email'])){
         $email = mysqli_real_escape_string($conn,$_POST['email']);
	$sql="SELECT email FROM login where email='$email' ";
		
$result= mysqli_query($conn,$sql);

$count=mysqli_num_rows($result);
if($count){
session_start();


$mail = new PHPMailer;

$mail->SMTPDebug = 0;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com;';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = Email;                 // SMTP username
$mail->Password = pass;                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom(Email, 'welfareportal');
$mail->addAddress($email);     // Add a recipient

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Password Reset';
$mail->Body    = '"Hi, Admin click here to change your password http://localhost/project/forgot.php";</b>';
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {

 echo "<script> alert('Check your registered email id to change your password');
window.location.href='adminlogin.php';
</script>";


 }}}

?>
 





           
	
