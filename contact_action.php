<?php
$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$message=$_POST["message"];

$to="smithasubhram@gmail.com";
$subject="Mail from : " . $email;


$txt="Name : " . $name . "\r\n Phone : " . $phone . "\r\n Message : " . $message . "\r\n";
$header="From : " . $email . "\r\n";

if($email!=NULL && $name!=NULL && $message!=NULL && $phone!=NULL)
{ 
 mail($to,$subject,$txt,$headers);
 echo "<script>alert('Thank you for getting in touch! ');</script>";
 echo "<script>document.location.href='contact.php'</script>";
}
else{
    echo "<script>alert('Mail was not sent. Please try again later');</script>";
}
?>