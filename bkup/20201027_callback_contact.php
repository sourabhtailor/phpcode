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
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	if (!empty($_POST['email'])) {
		if(empty($_SESSION['captcha_code'] ) || strcasecmp($_SESSION['captcha_code'], $_POST['captcha_code']) != 0){ 			
			$_SESSION['failure_msg'] = 'The Validation code does not match!';
			header("location:contact_form.php");	
		} else {
			$mail = new PHPMailer;
			$mail->IsSMTP();
			$mail->SMTPAuth = true; // authentication enabled
			$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
			$mail->Host = "smtp.gmail.com";
			$mail->Port = 465; // or 587				
			$mail->Username = "mailer.infomagine@gmail.com";
			$mail->Password = "!m@!leR@@Nf0m@gIne@@20)2";//"20!Nf0m@gIne@m@!leR@20";
			$mail->SetFrom("priyanka.mittal@vksoftwares.com");				
			$mail->IsHTML(true);
			$mail->Subject = "VK Softwares - Contact Form";
			$mail->Body = "Name -: <b>". $name ."</b>. <br/> Email -: <b>". $email ."</b>.<br/> Phone -: <b>". $phone ."</b>.<br/> Subject -: <b>". $subject ."</b>.<br/> Message -: <b>". $message ."</b>.";
			$mail->AddAddress("priyanka.mittal@vksoftwares.com");
			if(!$mail->Send()) {
				$_SESSION['failure_msg'] = 'Mailer Error';		
				header("location:contact_form.php");
			}else {
				$_SESSION['success_msg'] = 'Submitted successfully.';		
				header("location:contact_form.php");				
			}
		}    
	} else {
		$_SESSION['failure_msg'] = 'Empty Data';
		header("location:contact_form.php");
	}			
} else {
	$_SESSION['failure_msg'] = 'Somthing went wrong';
	header("location:contact_form.php");
}
?>