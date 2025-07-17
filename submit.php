<?php
// Replace with your email
$to = "info@keshaventerprises.com";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input
    $name    = strip_tags(trim($_POST["name"]));
    $email   = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $phone   = strip_tags(trim($_POST["phone"]));
    $message = strip_tags(trim($_POST["message"]));

    // Validate inputs
    if (empty($name) || empty($email) || empty($phone) || empty($message)) {
        header("Location: contact.php?status=error&msg=Please+fill+in+all+required+fields");
        exit;
    }

    // Email content
    $subject = "New Enquiry from Website Contact Form";
    $body = "
        <strong>Name:</strong> {$name}<br>
        <strong>Email:</strong> {$email}<br>
        <strong>Phone:</strong> {$phone}<br>
        <strong>Message:</strong><br>{$message}
    ";

    // Headers
    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8\r\n";
    $headers .= "From: {$name} <{$email}>\r\n";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        header("Location: contact.php?status=success&msg=Your+enquiry+has+been+sent+successfully");
    } else {
        header("Location: contact.php?status=error&msg=Something+went+wrong.+Please+try+again+later");
    }
    exit;
} else {
    header("Location: contact.php?status=error&msg=Invalid+request");
    exit;
}
?>
