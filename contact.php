<?php
//get data from form  
$name = $_POST['fullname'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "harshitjain3349@gmail.com";
$subject = "Mail From recived portfolio website";
$txt ="Name = ". $fullname . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";

    mail($to,$subject,$txt,$headers);

//redirect
header("Location:thankyou.html");
?>