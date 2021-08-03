<?php
$name = $_POST["name"];
$email = $_POST["email"];
$nationality = $_POST["nationality"];
$comment = $_POST["comment"];

$email_from = "info@deltaplan.com";
$email_subject = "New form submission";
$email_body = "User name: $name. \n".
			  "User e-mail: $email. \n".
			  "User nationality: $nationality. \n".
			  "User message: $comment. \n";

$to = 'misumarufa@gmail.com';
$headers = 'From: $email_from \r\n';
$headers = 'Reply to: $email \r\n';

mail($to,$email_subject,$email_body,$headers);

header("Location: feedback.html");
?>