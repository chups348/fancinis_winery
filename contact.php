<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Add email address where you want to receive the message
    $to = 's_chupa@fanshaweonline.ca';
    $subject = 'Contact Form Submission';
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    // Send email
    mail($to, $subject, $body);

    // Redirect to thank you page
    header('Location: thank-you.html');
    exit;
}
?>