<?php

//This is simple mail script. For php beginers. ne wfile

//The PHP built in function mail() is used to send mail from PHP scripts
//Validation and sanitization checks on the data are essential to sending secure mail
//The PHP built in function filter_var() provides an easy to use and efficient way of performing data sanitization and vch editit.

function sanitize_my_email($field) {
    $field = filter_var($field, FILTER_SANITIZE_EMAIL);
    if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}
$to_email = 'user@email.com';
$subject = 'Subject of this mail.';
$message = 'Body of the message.';
$headers = 'From: sender@email.com';
//check if the email address is invalid $secure_check
$secure_check = sanitize_my_email($to_email);
if (!$secure_check) {
    echo "Invalid input";
} else {
    mail($to_email, $subject, $message, $headers);
    echo "This email is sent using PHP Mail";
}
