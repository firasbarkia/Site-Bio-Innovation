<?php
if(isset($_POST['submit'])){
  $to = "firasbarkia090@gmail.com"; // Change to your email address
  $subject = "New Message from Contact Form" or die("null") ; 
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

if (mail($to, $subject, $body, $headers)) {
    echo "Email sent successfully.";
  } else {
    echo "An error occurred and the email could not be sent.";
  }
}

?>