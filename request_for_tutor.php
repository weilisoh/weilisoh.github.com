<?php
$name = $_POST['name'];
$contact = $_POST['contact'];
$subjects = $_POST['subjects'];
$address = $_POST['address'];
$school = $_POST['school'];
$time = $_POST['time'];
$message = $_POST['message'];

$email_from = 'keby5swl@nottingham.edu.my';
$email_subject = 'Request for Tutor Form'
$email_body = "User Name: $name.\n".
				"User Contact No: $contact.\n".
				"User Subjects: $subjects.\n".
				"User Address: $address.\n".
				"User School: $school.\n".
				"User Time: $time.\n".
				"User Message: $message.\n";

$to = "weilisoh@gmail.com";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("location: index_html");



?>