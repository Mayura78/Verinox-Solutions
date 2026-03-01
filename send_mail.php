<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){

$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

$to="verinoxsolutions@gmail.com"; // meka oyage email eka danna
$subject="New Contact Message from Website";
$body="Name: $name\nEmail: $email\nMessage:\n$message";

$headers="From: $email";

if(mail($to,$subject,$body,$headers)){
echo "<script>alert('Message Sent Successfully'); window.location='index.html';</script>";
}else{
echo "<script>alert('Error Sending Message'); window.location='index.html';</script>";
}
}
?>