<?php
//get data from form 
$cname = $_POST['cname'];
$name = $_POST['name'];
$phone= $_POST['phone'];
$message= $_POST['message'];
$to = "bajrangi@rirabh.com";
$subject = "Mail From website";
$txt ="Cname = ". $cname .Name = ". $name . "\r\n  Phone = " . $phone . "\r\n Message =" . $message;
$headers = "From: info@urvyasecurity.com";
if($phone!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>