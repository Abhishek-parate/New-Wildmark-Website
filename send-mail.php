<?php
ob_start(); // Prevent header issues

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
        header("Location: contact.php?status=error");
        exit();
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: contact.php?status=invalid_email");
        exit();
    }

    if (!preg_match('/^[0-9]{10}$/', $phone)) {
        header("Location: contact.php?status=invalid_phone");
        exit();
    }

    $mail = new PHPMailer(true);

    try {

        // SMTP SETTINGS
        $mail->isSMTP();
        $mail->Host       = 'smtp.hostinger.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'enquiry@wildmarkresort.com';
        $mail->Password   = 'Abhi@9860303985#';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        $mail->setFrom('enquiry@wildmarkresort.com', 'Wildmark Resort');
        $mail->addAddress('yashchikhale711@gmail.com');

        $mail->isHTML(true);
        $mail->Subject = "New Website Lead - Wildmark Resort";

        $mail->Body = "
        <h2 style='color:#8E1616;'>New Website Enquiry</h2>
        <table border='1' cellpadding='10' cellspacing='0' style='border-collapse:collapse;width:100%;'>
            <tr><td><strong>Name</strong></td><td>{$name}</td></tr>
            <tr><td><strong>Email</strong></td><td>{$email}</td></tr>
            <tr><td><strong>Phone</strong></td><td>{$phone}</td></tr>
            <tr><td><strong>Message</strong></td><td>" . ($message ?: 'No message') . "</td></tr>
        </table>
        ";

        $mail->AltBody = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: " . ($message ?: 'No message');

        $mail->send();

        // ✅ SUCCESS REDIRECT
        header("Location: https://wildmarkresort.com/thank-you/");
        exit();

    } catch (Exception $e) {

        // Optional: Log error instead of showing to user
        error_log("Mailer Error: " . $mail->ErrorInfo);

        header("Location: /contact.php?status=mail_error");
        exit();
    }

} else {
    header("Location: /contact.php");
    exit();
}

ob_end_flush();