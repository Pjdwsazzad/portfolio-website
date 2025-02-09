<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $projectDetails = htmlspecialchars($_POST['project-details']);
    $serviceName = htmlspecialchars($_POST['service-name']);
    $price = htmlspecialchars($_POST['price']);
    $budget = htmlspecialchars($_POST['budget']);

    // Email Notification
    $to = 'sazzad.pagesdev@gmail.com'; // Change this to your email
    $subject = 'New Hire Me Form Submission';
    $message = "
    Name: $name\n
    Email: $email\n
    Project Details: $projectDetails\n
    Service Name: $serviceName\n
    Price: $price\n
    Budget: $budget
    ";
    $headers = 'From: no-reply@example.com' . "\r\n" . 'Reply-To: ' . $email;

    if (mail($to, $subject, $message, $headers)) {
        echo 'Thank you for your submission!';
    } else {
        echo 'Error: Unable to send email.';
    }
}
?>
