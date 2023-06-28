<?php
if (isset($_POST["contactSubmit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $mailTo = "alilastreza@pm.me";
    $emailSubject = 'example.com Contact Form "' . $subject . '"';
    $emailBody = 'Name: ' . $name . '\nEmail: ' . $email . '\n\nSubject: ' . $subject . '\n\nMessage:\n' . $message;
    $headers = 'From: ' . $name . ' <' . $email . '>';

    mail($mailTo, $emailSubject, $emailBody, $headers);
    header("Location: index.php?contactForm=messageSent");
} else {
    header("Location: index.php");
}
