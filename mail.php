<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent=" From: $name \n  Message: $message";
$recipient = "kindrom228@gmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, $formcontent, $mailheader) or die("Error!");
header("location: thank-you.html")
error_page 405 =200 @405; 

location @405 { 
	root /htdocs; 
	proxy_pass http://localhost:8080; 
}
?>