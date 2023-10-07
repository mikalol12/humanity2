<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST["fname"];
    $last_name = $_POST["lname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    $to = "lbmika5@gmail.com"; 
    $subject = "Message from Contact Form";
    $headers = "From: $email";
    $message_body = "First Name: $first_name\nLast Name: $last_name\nEmail: $email\nPhone: $phone\nMessage: $message";

    mail($to, $subject, $message_body, $headers);
}
?>
