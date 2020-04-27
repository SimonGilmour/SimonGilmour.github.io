<?php

if(isset($_POST['name']))
$name = $_POST['name'];
if(isset($_POST['email']))
$email = $_POST['email'];
if(isset($_POST['message']))
$message = $_POST['message'];
$content = "From $name \n Email: $email \n Message: $message";
$me = "Simonrgilmour@gmail.com";
$mailHeader = "From $email \r\n";
mail($me, "Found you on an e-portfolio", $content, $mailHeader) or die("Could not mail!");
echo "Email Sent!";
?>