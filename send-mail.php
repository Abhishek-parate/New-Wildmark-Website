<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/includes/PHPMailer/src/Exception.php';
require __DIR__ . '/includes/PHPMailer/src/PHPMailer.php';
require __DIR__ . '/includes/PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name    = trim(htmlspecialchars($_POST['name'] ?? ''));
    $email   = trim(filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL));
    $phone   = trim(htmlspecialchars($_POST['phone'] ?? ''));
    $message = trim(htmlspecialchars($_POST['message'] ?? ''));

    // Validation
    if (empty($name) || empty($email) || empty($phone)) {
        die("Required fields missing.");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format.");
    }

    if (!preg_match('/^[0-9]{10}$/', $phone)) {
        die("Invalid phone number.");
    }

    $mail = new PHPMailer(true);

    try {

        // SMTP SETTINGS (Your Server)
        $mail->isSMTP();
        $mail->Host       = 'mail.techinbox.in';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'enquiry@techinbox.in';
        $mail->Password   = 'Abhi@9860@!';   // your password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // SSL
        $mail->Port       = 465;

        $mail->setFrom('enquiry@techinbox.in', 'Website Enquiry');
        $mail->addAddress('wildmarkresort@gmail.com');

        $mail->isHTML(true);
        $mail->Subject = "New Website Lead - Tech In Box";

        $mail->Body = "
        <h2>New Website Enquiry</h2>
        <table border='1' cellpadding='8'>
            <tr><td><strong>Name</strong></td><td>$name</td></tr>
            <tr><td><strong>Email</strong></td><td>$email</td></tr>
            <tr><td><strong>Phone</strong></td><td>$phone</td></tr>
            <tr><td><strong>Message</strong></td><td>" . ($message ?: 'No message') . "</td></tr>
        </table>
        ";

        $mail->send();

        echo "<script>alert('Enquiry Sent Successfully!'); window.history.back();</script>";

    } catch (Exception $e) {
        echo "Mailer Error: {$mail->ErrorInfo}";
    }
}