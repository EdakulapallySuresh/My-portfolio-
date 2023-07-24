<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["Name"];
    $email = $_POST["Email"];
    $subject = $_POST["Subject"];
    $message = $_POST["Message"];

    // Set the recipient email address
    $to = "sk2502194@gmail.com"; // Replace with the recipient's email address

    // Set the email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";

    // Compose the email message
    $email_message = "<html><body>";
    $email_message .= "<h2>Contact Form Submission</h2>";
    $email_message .= "<p><strong>Name:</strong> $name</p>";
    $email_message .= "<p><strong>Email:</strong> $email</p>";
    $email_message .= "<p><strong>Subject:</strong> $subject</p>";
    $email_message .= "<p><strong>Message:</strong><br>$message</p>";
    $email_message .= "</body></html>";

    // Send the email
    if (mail($to, $subject, $email_message, $headers)) {
        // Email sent successfully
        echo "<p>Email sent successfully!</p>";
    } else {
        // Email failed to send
        echo "<p>Failed to send email. Please try again later.</p>";
    }
}
?>
