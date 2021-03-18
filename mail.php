<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];

$to = "thiles03@gmail.com";
$subject = "Message from Garden Umpire website.";
$txt ="Name: ". $name . "\r\n  Email: " . $email . "\r\n Message: " . $message;
$headers = "From: noreply@gardenumpire.com";

mail($to,$subject,$txt,$headers);

//redirect
header("Location:success.html");
?>
