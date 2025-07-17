<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input
    $name    = htmlspecialchars(trim($_POST['name']));
    $email   = htmlspecialchars(trim($_POST['email']));
    $phone   = htmlspecialchars(trim($_POST['phone']));
    $service = htmlspecialchars(trim($_POST['service']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Recipient email
    $to = "info@keshaventerprises.com"; // Replace with your actual email
   $subject = "📩 New Client Enquiry | Powered by Viral Ads Media";

$body = "
    <div style='font-family: Arial, sans-serif; color: #333;'>
        <h2 style='color: #0d6efd;'>🚀 New Website Enquiry Received</h2>
        <p>Hi Team,</p>
        <p>You’ve received a new enquiry via the <strong>Viral Ads Media</strong> website. Here are the details:</p>
        
        <table cellpadding='10' cellspacing='0' border='0' style='background: #f9f9f9; border: 1px solid #ddd;'>
            <tr><td><strong>👤 Name:</strong></td><td>$name</td></tr>
            <tr><td><strong>📧 Email:</strong></td><td>$email</td></tr>
            <tr><td><strong>📞 Phone:</strong></td><td>$phone</td></tr>
            <tr><td><strong>🛠️ Service Interested:</strong></td><td>$service</td></tr>
            <tr><td><strong>📝 Message:</strong></td><td>$message</td></tr>
        </table>

        <p style='margin-top: 20px;'>Please follow up promptly to provide the best experience for our potential client.</p>
        
        <hr style='margin-top: 30px;'>
        <p style='font-size: 14px; color: #666;'>This enquiry was submitted via <strong>Viral Ads Media</strong> — Your Digital Growth Partner.</p>
    </div>
";


    // Headers
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: <$email>" . "\r\n";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Your enquiry has been sent successfully!'); window.location.href='index.php';</script>";
    } else {
        echo "<script>alert('Failed to send enquiry. Please try again later.'); window.history.back();</script>";
    }
} else {
    echo "<script>alert('Invalid request!'); window.history.back();</script>";
}
?>
