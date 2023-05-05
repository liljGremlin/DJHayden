<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $to = "youremail@example.com"; // replace with your email address
    $subject = "New contact form submission";
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    
    mail($to, $subject, $body);
    
    echo "Thank you for your message!";
}
?>
