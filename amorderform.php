<?php

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$address = $_REQUEST['address'];
$order = $_REQUEST['payment'];
$payment = $_REQUEST['payment'];
$message = $_REQUEST['message'];

$email_body = "

Dear $name,

Thank you for your order. This is to confirm that your order has been received. Below are the details of your order, submitted to Acoustic Moods. We will be in touch within 48 hours to organise payment.

Name: $name
E-mail: $email
Telephone: $phone
Address: $address
Order: $order
Payment Method: $payment
Other Details: $message

kind regards,
Chris, Tony & Dan

";

if (!isset($_REQUEST['email'])) {
header( "Location: http://www.acousticmoods.co.uk/order.html" );
}

elseif (empty($name) || empty($email) || empty($message)) {
header( "Location: http://www.acousticmoods.co.uk/orderreq.html" );
}

elseif	(is_numeric($phone)){
// mail{'MAIL TO','SUBJECT LINE', MAIL BODY};
mail($email, 'Acoustic Moods order', $email_body, 'From: orders@acousticmoods.co.uk');
mail('c.dumigan@ntlworld.com', 'Acoustic Moods order', $email_body, 'From: orders@acousticmoods.co.uk');
mail('dancoghill@hotmail.com', 'Acoustic Moods order', $email_body, 'From: orders@acousticmoods.co.uk');

header( "Location: http://www.acousticmoods.co.uk/albums" );
}

else {
header( "Location: http://www.acousticmoods.co.uk/orderreq.html" );

?>
