<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $recipient = "sina.na@gmail.com";
    $headers = "From: $email" . "\r\n" . "Reply-To: $email" . "\r\n";
    $subject = "New contact form submission by $name";

    mail($recipient, $subject, $message, $headers);
    echo "Your message was sent, thank you!";
} else {
    echo "Something went wrong, please try again.";
}
?>
