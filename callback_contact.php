<?php
ini_set('display_errors', 1);
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
require('PHPMailer/src/Exception.php');
require('PHPMailer/src/PHPMailer.php');
require('PHPMailer/src/SMTP.php');   
date_default_timezone_set('Asia/Kolkata');
if (isset($_POST['submit'])) {	
	if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){
		$secret = '6Ld8FqsZAAAAACLY_ic61husnD9wxEgDrc0Z87U2';
		$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
		$responseData = json_decode($verifyResponse);
		if($responseData->success){
			if (!empty($_POST['email']) && !empty($_POST['phone'])) {
				$name = $_POST['name'];
				$email = $_POST['email'];
				$phone = $_POST['phone'];
				$subject = $_POST['subject'];
				$message = $_POST['message'];
				$to = "hr@vksoftwares.com";
				if($email != ''){
					$mail = new PHPMailer;
					$mail->IsSMTP();
					$mail->SMTPAuth = true; // authentication enabled
					$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
					$mail->Host = "smtp.gmail.com";
					$mail->Port = 465; // or 587				
					$mail->Username = "mailer.infomagine@gmail.com";
					$mail->Password = "202!!m@!leRNf0m@gIne@@202104";				
					$mail->SetFrom($to);				
					$mail->IsHTML(true);
					$mail->Subject = "VK Softwares - Contact Form";
					$mail->Body = "Name -: <b>". $name ."</b>. <br/> Email -: <b>". $email ."</b>.<br/> Phone -: <b>". $phone ."</b>.<br/> Subject -: <b>". $subject ."</b>.<br/> Message -: <b>". $message ."</b>.";
					$mail->AddAddress($to);
					if(!$mail->Send()) {
						$_SESSION['failure_msg'] = 'Mailer Error';		
						header("location:contact_form.php");
					}else {
						$_SESSION['success_msg'] = 'Submitted successfully.';		
						header("location:contact_form.php");				
					}
				}				    
			}
			else {
				$_SESSION['failure_msg'] = 'Empty Data';
				header("location:contact_form.php");
			}
		}
		else {
			$_SESSION['failure_msg'] = 'Captha Failed';
			header("location:contact_form.php");
		}
	}
	else {
		$_SESSION['failure_msg'] = 'Invalid Captha';
		header("location:contact_form.php");
	}
} else {
	$_SESSION['failure_msg'] = 'Somthing went wrong';
	header("location:contact_form.php");
}
?>