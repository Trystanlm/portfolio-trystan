<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/../vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'trystan5lemarec@gmail.com'; // ✅ met ton adresse
    $mail->Password = 'rpur akow pjmo mebl'; // ✅ mot de passe d'application Google
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->setFrom('trystan5lemarec@gmail.com', 'trystanportefolio.fr');
    $mail->addAddress('trystan5lemarec@gmail.com'); // où tu reçois le mail
    $mail->Subject = 'Test PHPMailer';
    $mail->Body    = 'Ceci est un test simple.';

    $mail->send();
    echo "✅ Message envoyé avec succès";
} catch (Exception $e) {
    echo "❌ Erreur lors de l'envoi : " . $mail->ErrorInfo;
}
