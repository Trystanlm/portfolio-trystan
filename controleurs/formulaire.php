<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Inclure PHPMailer via Composer
require_once __DIR__ . '/../vendor/autoload.php';

$feedback = '';

// Vérifie si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['envoyer'])) {
    // Nettoyage des données
    $prenom = htmlspecialchars($_POST['prenom']);
    $nom = htmlspecialchars($_POST['nom']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars($_POST['message']);

    $mail = new PHPMailer(true);

    try {
        // Configuration SMTP pour Gmail
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'trystan5lemarec@gmail.com';       // Ton adresse Gmail
        $mail->Password = 'rpur akow pjmo mebl';     // Mot de passe d'application (voir ci-dessous)
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Paramètres de l'e-mail
        $mail->setFrom($email, "$prenom $nom");       // Adresse de l'expéditeur (utilisateur)
        $mail->addAddress('trystan5lemarec@gmail.com');      // Adresse de réception (toi)
        $mail->Subject = "Nouveau message de $prenom $nom";
        $mail->Body    = "Message de : $prenom $nom\nEmail : $email\n\n$message";

        $mail->send();
        $feedback = "✅ Message envoyé avec succès.";
    } catch (Exception $e) {
        $feedback = "❌ Erreur lors de l'envoi : " . $mail->ErrorInfo;
    }
} else {
    $feedback = "❌ Le formulaire n'a pas été soumis correctement.";
}

// Réaffiche la vue de contact avec le message
include 'vues/v-contact.php';
