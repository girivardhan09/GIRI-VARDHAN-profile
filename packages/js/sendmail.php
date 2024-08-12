<?php
  // Configuration
  $to = 'girivardhanreddy2003@gmail.com';
  $subject = 'Contact Form Submission';

  // Get form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $description = $_POST['description'];

  // Create message
  $message = "Name: $name\n";
  $message .= "Email: $email\n";
  $message .= "Subject: $subject\n";
  $message .= "Description: $description\n";

  // Send email
  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";
  mail($to, $subject, $message, $headers);

  // Redirect to thank you page
  header('Location: thank-you.html');
  exit;
?>