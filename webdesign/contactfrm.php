<?php
$path = "/usr/lib/pear";
set_include_path(get_include_path() . PATH_SEPARATOR . $path);

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = '';

$email_subject = "New form submission";

$email_body = "User name: $name.\n".
    "User Email: $visitor_email.\n".
    "User message: $message.\n";

$to = "jhonjosh5@gmail.com";
$headers = "From:$email_from\r\n";
$headers .= "Reply-to: $visitor_email\r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location : Contacts.html");
