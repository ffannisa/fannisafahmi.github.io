<?php
// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Compose email
$to = 'fannisafahmi3@gmail.com';
$subject = 'New message from website';
$body = "Name: $name\nEmail: $email\nMessage: $message";
$headers = "From: $email";

// Send email
if (mail($to, $subject, $body, $headers)) {
  echo 'Message sent successfully!';
} else {
  echo 'An error occurred while sending the message.';
}
?>

