<?php
ob_start(); // Buffer all output — prevents PHP notices/warnings from corrupting JSON responses
/**
 * mail/contact.php
 * Handles contact-form submissions via PHPMailer + Gmail SMTP.
 * Called by mail/contact.js as an AJAX POST endpoint.
 */

// ── Only accept POST requests ─────────────────────────────────────────────────
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit('Method Not Allowed');
}

// ── Load Composer autoloader (path relative to this file → ../vendor) ─────────
$autoload = __DIR__ . '/../vendor/autoload.php';
if (!file_exists($autoload)) {
    http_response_code(500);
    exit('Composer autoloader not found. Run: composer install');
}
require $autoload;

// ── Load mail config (credentials, host, ports, etc.) ─────────────────────────
require __DIR__ . '/config.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// ── Input validation ──────────────────────────────────────────────────────────
$name    = trim($_POST['name']    ?? '');
$email   = trim($_POST['email']   ?? '');
$subject = trim($_POST['subject'] ?? '');
$message = trim($_POST['message'] ?? '');

if (
    empty($name) ||
    empty($subject) ||
    empty($message) ||
    !filter_var($email, FILTER_VALIDATE_EMAIL)
) {
    http_response_code(400);
    exit('Invalid form data.');
}

// ── Sanitise inputs ───────────────────────────────────────────────────────────
$name    = htmlspecialchars(strip_tags($name),    ENT_QUOTES, 'UTF-8');
$email   = htmlspecialchars(strip_tags($email),   ENT_QUOTES, 'UTF-8');
$subject = htmlspecialchars(strip_tags($subject), ENT_QUOTES, 'UTF-8');
$message = htmlspecialchars(strip_tags($message), ENT_QUOTES, 'UTF-8');

// ── Build the HTML email body ─────────────────────────────────────────────────
$htmlBody = "
<html>
<body style='font-family: Arial, sans-serif; color: #333; line-height: 1.6;'>
  <h2 style='color: #2c7be5;'>New Contact Form Enquiry</h2>
  <table cellpadding='8' style='border-collapse: collapse; width: 100%; max-width: 600px;'>
    <tr>
      <td style='font-weight:bold; width:100px;'>Name</td>
      <td>{$name}</td>
    </tr>
    <tr style='background:#f5f5f5;'>
      <td style='font-weight:bold;'>Email</td>
      <td><a href='mailto:{$email}'>{$email}</a></td>
    </tr>
    <tr>
      <td style='font-weight:bold;'>Subject</td>
      <td>{$subject}</td>
    </tr>
    <tr style='background:#f5f5f5;'>
      <td style='font-weight:bold; vertical-align:top;'>Message</td>
      <td>" . nl2br($message) . "</td>
    </tr>
  </table>
  <p style='margin-top:24px; color:#888; font-size:12px;'>
    Sent via the contact form at fraserfacilityservices.ca
  </p>
</body>
</html>
";

$plainBody = "New Contact Form Enquiry\n\n"
    . "Name:    {$name}\n"
    . "Email:   {$email}\n"
    . "Subject: {$subject}\n\n"
    . "Message:\n{$message}\n";

// ── Send via PHPMailer ────────────────────────────────────────────────────────
$mail = new PHPMailer(true); // true = enable exceptions

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host       = MAIL_HOST;
    $mail->SMTPAuth   = true;
    $mail->Username   = MAIL_USERNAME;
    $mail->Password   = MAIL_PASSWORD;
    $mail->SMTPSecure = (MAIL_ENCRYPTION === 'ssl') ? PHPMailer::ENCRYPTION_SMTPS : PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = MAIL_PORT;
    $mail->CharSet    = 'UTF-8';

    // From / To
    $mail->setFrom(MAIL_FROM, MAIL_FROM_NAME);
    $mail->addAddress(MAIL_TO, MAIL_TO_NAME);
    $mail->addReplyTo($email, $name);   // Reply goes back to the visitor

    // Content
    $mail->isHTML(true);
    $mail->Subject = "[Fraser Website] {$subject} – {$name}";
    $mail->Body    = $htmlBody;
    $mail->AltBody = $plainBody;

    $mail->send();
    ob_clean(); // Discard any buffered notices before writing JSON
    http_response_code(200);
    header('Content-Type: application/json');
    echo json_encode(['status' => 'success', 'message' => 'Message sent successfully.']);

} catch (Exception $e) {
    // Log error server-side; never expose credentials to the client
    error_log('[Fraser Contact Form] Mailer Error: ' . $mail->ErrorInfo);
    ob_clean(); // Discard any buffered notices before writing JSON
    http_response_code(500);
    header('Content-Type: application/json');
    echo json_encode(['status' => 'error', 'message' => 'Mail server error. Please try again later.']);
}
