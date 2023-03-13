<?php
//get data from form 
$companyname = $_POST['companyname'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];

$email= $_POST['email'];
$phone= $_POST['phone'];
$message= $_POST['message'];
$to = "info@urvyasecurity.com";
$subject = "Mail From Urvya Security";
$txt ="Company name = ". $companyname . "\r\n First name = ". $firstname  .  "\r\n  Last name = ". $lastname  .     "\r\n  Email = " . $email . "\r\n  Phone = " . $phone . "\r\n Message =" . $message;
$headers = "From: noreply@urvyasecurity.com";
if($phone!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou");
?>