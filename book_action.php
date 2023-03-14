<?php
$name=$_POST["name"];
$age=$_POST["visitor_age"];
$mobile=$_POST["child"];
$email=$_POST["email"];
$location=$_POST["location"];
$challenge=$_POST["challenge"];
$achieve=$_POST["achieve"];
$purpose=$_POST["purpose"];
$to="smithasubhram@gmail.com";
$subject="Mail from : " . $email;

$txt="Name : " . $name . "\r\n Age : " . $age . "\r\n Mobile : " . $mobile . "\r\n Location : " . $location . "\r\n Your Challenge : " . $challenge . "\r\n Purpose of Coaching : " . $purpose . "\r\n  what would you like to achieve through coaching : ". $achieve . "\r\n"; 

$header="From : " . $email . "\r\n";

if($email!=NULL && $name!=NULL && $age!=NULL && $mobile!=NULL && $location!=NULL && $challenge!=NULL && $achieve!=NULL && $purpose!=NULL)
{ 
 mail($to,$subject,$txt,$headers);
 echo "<script>alert('Thank you for getting in touch! ');</script>";
 echo "<script>document.location.href='booknow.php'</script>";
}
else{
    echo "<script>alert('Mail was not sent. Please try again later');</script>";
}
?>