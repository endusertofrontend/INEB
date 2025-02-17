<?php
// Sanitize user inputs to prevent header injection attacks
$name = htmlspecialchars(strip_tags($_POST['name']));
$visitor_email = htmlspecialchars(strip_tags($_POST['email']));
$subject = htmlspecialchars(strip_tags($_POST['subject']));
$message = htmlspecialchars(strip_tags($_POST['message']));

$email_from = "ineb@yourwebsite.com"; 

$email_subject = "New Form Submission"; 

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Subject: $subject.\n".
              "User Message: $message.\n";

$to = 'anibalpablo443@gmail.com'; 

$headers = "From: $email_from \r\n"; 
$headers .= "Reply-To: $visitor_email \r\n";

// Send email and check for success
if(mail($to, $email_subject, $email_body, $headers)){
    header("Location: contact.html");
    exit();
} else {
    echo "There was an error sending the email.";
}
?>