<?php
/**
 * mail/contact.php
 * Handles contact-form submissions with dual support:
 * 1. AJAX JSON response for async submissions
 * 2. Full-page popup modal for direct form POST submissions
 * 
 * Supports PHPMailer SMTP with automatic local debug logging.
 */

error_reporting(E_ALL);
ini_set('display_errors', 0);

// Auto-detect if we are in a local environment
$clientIp = $_SERVER['REMOTE_ADDR'] ?? '127.0.0.1';
$isLocal  = in_array($clientIp, ['127.0.0.1', '::1', 'localhost']) || strpos($_SERVER['HTTP_HOST'] ?? '', 'localhost') !== false;

// Check if request is an AJAX submission
$isAjax = (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest')
    || (isset($_SERVER['HTTP_ACCEPT']) && strpos($_SERVER['HTTP_ACCEPT'], 'application/json') !== false);

// Process only POST requests
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Sanitize and retrieve form data
    $name    = isset($_POST['name']) ? trim(strip_tags($_POST['name'])) : '';
    $email   = isset($_POST['email']) ? trim(strip_tags($_POST['email'])) : '';
    $phone   = isset($_POST['phone']) ? trim(strip_tags($_POST['phone'])) : '';
    $subject = isset($_POST['subject']) ? trim(strip_tags($_POST['subject'])) : '';
    $message = isset($_POST['message']) ? trim(strip_tags($_POST['message'])) : '';

    // Validation
    $isValid = true;
    $errorMessage = '';

    if (empty($name)) {
        $isValid = false;
        $errorMessage = 'Please enter your name.';
    } elseif (empty($email)) {
        $isValid = false;
        $errorMessage = 'Please enter your email address.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $isValid = false;
        $errorMessage = 'Please enter a valid email address.';
    } elseif (empty($message)) {
        $isValid = false;
        $errorMessage = 'Please enter your message.';
    }

    $success = false;

    if ($isValid) {
        // Fallback default subject if left blank
        $displaySubject = !empty($subject) ? $subject : 'New Facility Service Inquiry';
        $mailSubject    = "[Fraser Website] {$displaySubject} from {$name}";

        // Build plain text email body
        $emailBody  = "=== NEW INQUIRY — Fraser Facility Services ===\n\n";
        $emailBody .= "Name:       " . $name . "\n";
        $emailBody .= "Email:      " . $email . "\n";
        if (!empty($phone)) {
            $emailBody .= "Phone:      " . $phone . "\n";
        }
        $emailBody .= "Subject:    " . $displaySubject . "\n\n";
        $emailBody .= "Message:\n" . $message . "\n\n";
        $emailBody .= "----------------------------------------\n";
        $emailBody .= "Submitted:  " . date("F j, Y, g:i a") . "\n";
        $emailBody .= "IP Address: " . $clientIp . "\n";
        $emailBody .= "========================================\n";

        // Build HTML email body
        $htmlPhoneRow = !empty($phone) ? "<tr><td style='font-weight:bold; width:120px; color:#0F2747;'>Phone</td><td>" . htmlspecialchars($phone) . "</td></tr>" : "";
        $htmlBody = "
        <html>
        <body style='font-family: Arial, sans-serif; color: #333; line-height: 1.6;'>
          <div style='background: #0F2747; padding: 20px; text-align: center; border-radius: 8px 8px 0 0;'>
            <h2 style='color: #ffffff; margin: 0; font-size: 20px;'>New Contact Form Inquiry</h2>
            <p style='color: #C9A14A; margin: 5px 0 0 0; font-size: 14px;'>Fraser Facility Services</p>
          </div>
          <div style='border: 1px solid #e0e0e0; border-top: none; padding: 25px; border-radius: 0 0 8px 8px;'>
            <table cellpadding='8' style='border-collapse: collapse; width: 100%; max-width: 600px;'>
              <tr style='background:#f9fafb;'>
                <td style='font-weight:bold; width:120px; color:#0F2747;'>Name</td>
                <td>" . htmlspecialchars($name) . "</td>
              </tr>
              <tr>
                <td style='font-weight:bold; width:120px; color:#0F2747;'>Email</td>
                <td><a href='mailto:" . htmlspecialchars($email) . "'>" . htmlspecialchars($email) . "</a></td>
              </tr>
              {$htmlPhoneRow}
              <tr style='background:#f9fafb;'>
                <td style='font-weight:bold; width:120px; color:#0F2747;'>Subject</td>
                <td>" . htmlspecialchars($displaySubject) . "</td>
              </tr>
              <tr>
                <td style='font-weight:bold; vertical-align:top; color:#0F2747;'>Message</td>
                <td>" . nl2br(htmlspecialchars($message)) . "</td>
              </tr>
            </table>
            <p style='margin-top:24px; color:#888; font-size:12px; border-top: 1px solid #eee; padding-top: 12px;'>
              Submitted on " . date("F j, Y, g:i a") . " &bull; IP: " . htmlspecialchars($clientIp) . "
            </p>
          </div>
        </body>
        </html>";

        // Try PHPMailer first if available
        $sentViaPhpMailer = false;
        $autoload = __DIR__ . '/../vendor/autoload.php';
        $configFile = __DIR__ . '/config.php';

        if (file_exists($autoload) && file_exists($configFile)) {
            require_once $autoload;
            require_once $configFile;

            if (class_exists('PHPMailer\PHPMailer\PHPMailer')) {
                try {
                    $mail = new \PHPMailer\PHPMailer\PHPMailer(true);
                    $mail->isSMTP();
                    $mail->Host       = defined('MAIL_HOST') ? MAIL_HOST : 'smtp.gmail.com';
                    $mail->SMTPAuth   = true;
                    $mail->Username   = defined('MAIL_USERNAME') ? MAIL_USERNAME : '';
                    $mail->Password   = defined('MAIL_PASSWORD') ? MAIL_PASSWORD : '';
                    $mail->SMTPSecure = (defined('MAIL_ENCRYPTION') && MAIL_ENCRYPTION === 'ssl') 
                        ? \PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_SMTPS 
                        : \PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
                    $mail->Port       = defined('MAIL_PORT') ? MAIL_PORT : 587;
                    $mail->CharSet    = 'UTF-8';
                    $mail->Timeout    = 10;

                    $fromAddress = defined('MAIL_FROM') ? MAIL_FROM : 'info@fraserfacilityservices.ca';
                    $fromName    = defined('MAIL_FROM_NAME') ? MAIL_FROM_NAME : 'Fraser Facility Services Website';
                    $toAddress   = defined('MAIL_TO') ? MAIL_TO : 'info@fraserfacilityservices.ca';
                    $toName      = defined('MAIL_TO_NAME') ? MAIL_TO_NAME : 'Fraser Facility Services';

                    $mail->setFrom($fromAddress, $fromName);
                    $mail->addAddress($toAddress, $toName);
                    $mail->addReplyTo($email, $name);

                    $mail->isHTML(true);
                    $mail->Subject = $mailSubject;
                    $mail->Body    = $htmlBody;
                    $mail->AltBody = $emailBody;

                    $mail->send();
                    $sentViaPhpMailer = true;
                    $success = true;
                } catch (\Exception $e) {
                    error_log('[Fraser Contact Form] PHPMailer Error: ' . $e->getMessage());
                }
            }
        }

        // Local environment or fallback handling
        if ($isLocal) {
            // In local test mode: Always write to debug log so developers can verify easily
            $logEntry  = "--- DEBUG EMAIL [" . date("Y-m-d H:i:s") . "] ---\n";
            $logEntry .= "To:      " . (defined('MAIL_TO') ? MAIL_TO : 'info@fraserfacilityservices.ca') . "\n";
            $logEntry .= "Subject: " . $mailSubject . "\n";
            $logEntry .= "Body:\n" . $emailBody . "\n";
            $logEntry .= "------------------------------------------\n\n";

            $logPath = __DIR__ . '/debug_emails.log';
            @file_put_contents($logPath, $logEntry, FILE_APPEND);
            $success = true;
        } elseif (!$sentViaPhpMailer) {
            // Standard mail() fallback on live server
            $to = defined('MAIL_TO') ? MAIL_TO : 'info@fraserfacilityservices.ca';
            $headers  = "From: " . $email . "\r\n";
            $headers .= "Reply-To: " . $email . "\r\n";
            $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
            $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

            $success = @mail($to, $mailSubject, $emailBody, $headers);
        }
    }

    // Determine status messages
    if ($success) {
        $status = 'success';
        $popupTitle = '✓';
        $popupMessage = 'Message Sent Successfully!';
        $popupSubMessage = 'Thank you for reaching out. We have received your inquiry and will get back to you shortly.';
        $circleClass = 'success';
    } else {
        $status = 'error';
        $popupTitle = '✕';
        $popupMessage = 'Submission Failed';
        $popupSubMessage = !empty($errorMessage) ? $errorMessage : 'There was a problem sending your message. Please try again later.';
        $circleClass = 'error';
    }

    // ── If AJAX request: respond with JSON ─────────────────────────────────────
    if ($isAjax) {
        header('Content-Type: application/json; charset=UTF-8');
        http_response_code($success ? 200 : 400);
        echo json_encode([
            'status'  => $status,
            'message' => $success ? $popupMessage : $popupSubMessage
        ]);
        exit;
    }

    // ── If direct POST: render the standalone popup card ──────────────────────
} else {
    // If accessed directly via GET without POST, redirect back to contact page
    header("Location: ../contact.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inquiry Status - Fraser Facility Services</title>
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Montserrat', 'Open Sans', sans-serif;
            background: linear-gradient(135deg, rgba(15, 39, 71, 0.95) 0%, rgba(21, 55, 97, 0.92) 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            width: 100%;
            padding: 20px;
        }

        .popup-container {
            width: 100%;
            display: flex;
            justify-content: center;
        }

        .popup-card {
            background: #ffffff;
            padding: 45px 35px 35px;
            border-radius: 20px;
            text-align: center;
            width: 100%;
            max-width: 440px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5), 0 0 0 1px rgba(201, 161, 74, 0.2);
            animation: slideUp 0.45s cubic-bezier(0.21, 1.11, 0.35, 1);
            position: relative;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(40px) scale(0.92);
            }
            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        .status-circle {
            width: 85px;
            height: 85px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 22px;
            color: #ffffff;
            font-size: 42px;
            font-weight: bold;
            font-style: normal;
        }

        .status-circle.success {
            background: linear-gradient(135deg, #3F6B45 0%, #2e5234 100%);
            box-shadow: 0 10px 24px rgba(63, 107, 69, 0.35);
        }

        .status-circle.error {
            background: linear-gradient(135deg, #dc3545 0%, #bd2130 100%);
            box-shadow: 0 10px 24px rgba(220, 53, 69, 0.35);
        }

        .popup-card h3 {
            font-size: 1.45rem;
            margin-bottom: 12px;
            color: #0F2747;
            font-weight: 700;
            line-height: 1.3;
        }

        .sub-text {
            color: #555555;
            font-size: 0.95rem;
            margin-bottom: 28px;
            line-height: 1.6;
            font-family: 'Open Sans', sans-serif;
        }

        .btn-ok {
            padding: 13px 42px;
            border: none;
            background: #0F2747;
            color: #ffffff;
            cursor: pointer;
            border-radius: 50px;
            font-size: 0.95rem;
            font-weight: 700;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
            display: inline-block;
            text-decoration: none;
            box-shadow: 0 6px 18px rgba(15, 39, 71, 0.25);
        }

        .btn-ok:hover {
            background: #C9A14A;
            color: #0F2747;
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(201, 161, 74, 0.35);
        }

        .footer-note {
            margin-top: 24px;
            font-size: 0.82rem;
            color: #718096;
            border-top: 1px solid #edf2f7;
            padding-top: 16px;
            font-family: 'Open Sans', sans-serif;
        }
    </style>
</head>

<body>
    <div class="popup-container">
        <div class="popup-card">
            <div class="status-circle <?php echo $circleClass; ?>">
                <i><?php echo $popupTitle; ?></i>
            </div>
            <h3><?php echo htmlspecialchars($popupMessage); ?></h3>
            <p class="sub-text">
                <?php echo htmlspecialchars($popupSubMessage); ?>
            </p>
            <button class="btn-ok" id="okBtn">OK</button>
            <?php if ($isLocal && $status === 'success'): ?>
                <div style="margin-top: 15px; color: #64748b; font-size: 0.8rem; background: #f8fafc; padding: 8px 12px; border-radius: 8px; border: 1px dashed #cbd5e1;">
                    <b>Local Mode:</b> Email logged to <code>mail/debug_emails.log</code>
                </div>
            <?php endif; ?>
            <?php if ($status === 'success'): ?>
                <div class="footer-note">We will get back to you within 24 hours.</div>
            <?php endif; ?>
        </div>
    </div>

    <script>
        document.getElementById('okBtn').addEventListener('click', function() {
            window.location.href = '../contact.php';
        });

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Enter' || e.key === 'Escape') {
                window.location.href = '../contact.php';
            }
        });
    </script>
</body>

</html>
