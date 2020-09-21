<?php

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];

$email_body = "

Dear $name,

Thank you for your message. This is to confirm that your message has been received. Below is a copy of the content of your message, submitted to Acoustic Moods.

Name: $name
Email: $email
Message: $message

kind regards,
Chris, Tony, Dan & Chas

";

if (!isset($_REQUEST['email'])) {
header( "Location: http://www.acousticmoods.co.uk/contact.html" );
}

elseif (empty($name) || empty($email) || empty($message)) {
header( "Location: http://www.acousticmoods.co.uk/contactreq.html" );
}

else {
// mail{'MAIL TO','SUBJECT LINE', MAIL BODY};
mail($email, 'Acoustic Moods Message Submission', $email_body, 'From: info@acousticmoods.co.uk');
mail('c.dumigan@ntlworld.com', 'Acoustic Moods Message Submission', $email_body, 'From: info@acousticmoods.co.uk');
mail('dancoghill@hotmail.com', 'Acoustic Moods Message Submission', $email_body, 'From: info@acousticmoods.co.uk');

header( "Location: http://www.acousticmoods.co.uk" );
}

?>
