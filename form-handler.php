<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_form = 'shalinsheth4915@gmail.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n"
              "User Email: $visitor_email.\n"
              "subject: $subject.\n"
              "User Message: $message .\n"

$to = 'purvesh.sheth75@gmail.com';

$headers = "From: $email_form \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

headewr("Location: contact.html");

?>