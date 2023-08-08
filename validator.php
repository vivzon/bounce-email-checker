<?php

function validateEmail($email)
{
    // Perform basic email format validation
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false;
    }

    // Split the email address into user and domain parts
    list($user, $domain) = explode('@', $email);

    // Perform DNS MX record lookup to check if the domain exists
    if (!checkdnsrr($domain, 'MX')) {
        return false;
    }

    return true;
}

function isBouncedEmail($email)
{
    // Create a socket connection to the email server
    $domain = substr(strrchr($email, '@'), 1);
    $socket = fsockopen($domain, 25, $errno, $errstr, 10);

    if (!$socket) {
        // Failed to establish a connection, considering it as a bounced email
        return true;
    }

    // Retrieve the response from the email server
    $response = fgets($socket);
    fclose($socket);

    // Check if the response indicates a bounce
    if (strpos($response, '250') === false) {
        return true;
    }

    return false;
}

?>