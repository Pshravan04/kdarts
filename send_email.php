<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Recipient email
    $to = "shravanphutanr@gmail.com"; // Replace with your Gmail address

    // Email subject
    $email_subject = "New Contact Form Submission: $subject";

    // Email body
    $email_body = "You have received a new message from the user $name.\n\n".
                  "Here are the details:\n".
                  "Name: $name\n".
                  "Email: $email\n".
                  "Message:\n$message";

    // Email headers
    $headers = "From: $email\n";
    $headers .= "Reply-To: $email";

    // Send email
    if (mail($to, $email_subject, $email_body, $headers)) {
        // Redirect to a thank you page or display a success message
        echo "Message sent successfully!";
    } else {
        // Display an error message
        echo "Failed to send message. Please try again later.";
    }
}
?>
