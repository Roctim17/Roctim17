<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$project= $_POST['project'];
$message= $_POST['message'];
$to = "mdrokibulislamroctim@gmail.com";
$subject = "Roctim.icu";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Project =" . $project . "\r\n Message =" . $message;
$headers = "From: noreply@roctim.icu" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>