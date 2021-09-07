<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$phone = $_POST['phone'];
$firma = $_POST['firma'];
$servicii = $_POST['servicii'];
$to = "andreialexandrescu7@gmail.com";
$subject = "Mail From geodesic-solutions.ro";
$txt ="Nume client : ". $name . "\r\n  Email : " . $email ."\r\n Firma client: " . $firma .  "\r\n Numar telefon client: " . $phone . "\r\n Mesaj :" . $message . "\r\n Serviciul dorit : " . $servicii;
$headers = "From: noreply@geodesic-solutions.ro" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location: https://www.geodesic-solutions.ro/contact.html");
?>