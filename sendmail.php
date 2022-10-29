<?php




use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';



function sendmail($subject,$mass){
	
	$mail = new PHPMailer(true);
	
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'myonaingoo623@gmail.com'; // Your gmail
	$mail->Password = 'iiqfbygqpcpeybeg'; // Your gmail app password
	$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
	$mail->Port = 465;
	`SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`;
	
	$mail->setFrom("myonaingoo623@gmail.com"); // Your gmail
	
	$mail->addAddress("myonaingoo623@gmail.com");
	$mail->isHTML(true);
	
	$mail->Subject =$subject;
	$mail->Body = $mass;
	
	$mail->send();
	
	
	
}
$subject="MNO Portfolio";
$email=$_POST["email"];
$mas=$_POST["mass"];

$mass="Form ".$email."<br>Massage:<br>".$mas;
echo $mass;

sendmail($subject,$mass);
header("location: ../index.html");
//error_reporting(0);


?>






