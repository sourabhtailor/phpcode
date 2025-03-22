<?php
/* */
session_start();
error_reporting(E_ALL ^ E_NOTICE); 

if (isset($_POST['submit'])) {
    $name = $_POST['uname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
	$response = isset($_POST["g-recaptcha-response"]) ? $_POST["g-recaptcha-response"]: '';
	
$url = 'https://www.google.com/recaptcha/api/siteverify';
$data = array(
'secret' => '6LfK9GAUAAAAAOwqecHowppDLV6V9l4v9mbJGKrr',
'response' => $response
);
$options = array(
'http' => array (
'method' => 'POST',
'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
'content' => http_build_query($data)
)
);
$context = stream_context_create($options);
$verify = file_get_contents($url, false, $context);
$captcha_success=json_decode($verify);
	
    if (!($name == '') && !($email == '') && !($message == '')) {
        $header2 = $name . "<" . $email . ">";
        $header = "http://vksoftwares.com";
        $msg = "Hello! $name Thank you...! For Contacting Us.
				This is a Contact Confirmation mail. We Will contact You as soon as possible.";
        $msg1 = "New User Contact to us On https://vksoftwares.com
					Name: $name
					E-mail: $email
					Subject: $subject
					Message: $message";
        if ($captcha_success->success==true) {
            mail('hr@infomagine.in', $header2, $msg1);
            mail($email, $header, $msg);
			$_SESSION['status'] = 'Success';
			$_SESSION['su_msg'] = 'Message sent successfully.......';
			header("location: contact.php");
        } else {
			$_SESSION['status'] = 'Error';
			$_SESSION['er_msg'] = 'You are a robot! Go away!';
			header("location: contact.php"); 
        }
	}		
	else {
		$_SESSION['status'] = 'Error';
		$_SESSION['er_msg'] = 'Invalid Details';
		header("location: contact.php");
	}
}
else {
	$_SESSION['status'] = 'Error';
	$_SESSION['er_msg'] = 'Invalid Method';
	header("location: contact.php");
}
?>