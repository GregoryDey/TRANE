<?php
if(!empty($_POST["send"])) {
	$name = $_POST["userName"];
	$email = $_POST["userEmail"];
	$subject = $_POST["subject"];
	$content = $_POST["content"];

	$toEmail = "trane@traneguyana.com";
	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
	if(mail($toEmail, $subject, $content, $mailHeaders)) {
	    $message = "Your message is sent successfully.";
	    $type = "success";
	}
}
require_once "contact.php";

sleep(2);
header("Location: http://traneguyana.com/assets/pages/contact.php");

?>