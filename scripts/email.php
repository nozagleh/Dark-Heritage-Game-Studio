<?php
///subscribe form
$recipient = "nozagleh@gmail.com"; ///  Your Email address
if (isset($_POST['email']))
  {
  //Send Mail To Webmaster
  $email = $_POST['email'];
  $name = $_POST['name'];
  $messageText = $_POST['message'];
  $subject = 'New message from website';
  $message =  $name . ' with the email ' . $email . ' said this: /n' . $messageText;
  mail("$recipient", $subject,
  $message, "From:" . $recipient);
 ;}
 ?>