<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $to = "dilip.khanal.948@gmail.com";
    $subject = "New Contact Request from $name";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";
    
    mail($to, $subject, $body);
    echo "Message sent successfully!";
}
?>
