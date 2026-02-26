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

        // SMTP SETTINGS
$mail->isSMTP();
$mail->Host       = 'smtp.hostinger.com';
$mail->SMTPAuth   = true;
$mail->Username   = 'enquiry@wildmarkresort.com'; // your Hostinger email
$mail->Password   = 'Abhi@9860303985#';           // password set in hPanel
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
$mail->Port       = 465;

$mail->setFrom('enquiry@wildmarkresort.com', 'Wildmark Resort');
$mail->addAddress('wildmarkresort@gmail.com');


        // Optional: send a copy/reply to the visitor
        // $mail->addReplyTo($email, $name);

        $mail->isHTML(true);
        $mail->Subject = "New Website Lead - Wildmark Resort";

        $mail->Body = "
        <h2 style='color:#2d6a4f;'>New Website Enquiry</h2>
        <table border='1' cellpadding='8' cellspacing='0' style='border-collapse:collapse;'>
            <tr><td><strong>Name</strong></td><td>$name</td></tr>
            <tr><td><strong>Email</strong></td><td>$email</td></tr>
            <tr><td><strong>Phone</strong></td><td>$phone</td></tr>
            <tr><td><strong>Message</strong></td><td>" . ($message ?: 'No message') . "</td></tr>
        </table>
        ";

        $mail->AltBody = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: " . ($message ?: 'No message');

        $mail->send();

        // ✅ Redirect to Thank You page on success
        header("Location: https://wildmarkresort.com/thank-you.php");
        exit();

    } catch (Exception $e) {
        // ❌ Redirect to error page or back with error message
        header("Location: /contact.php?status=error&msg=" . urlencode($mail->ErrorInfo));
        exit();
    }

} else {
    // Direct access — redirect home
    header("Location: /");
    exit();
}