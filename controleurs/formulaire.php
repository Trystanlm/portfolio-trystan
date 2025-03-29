<?php
if (isset($_POST['envoyer'])) {
    $prenom  = htmlspecialchars($_POST['prenom']);
    $nom     = htmlspecialchars($_POST['nom']);
    $message = htmlspecialchars($_POST['message']);

    $to      = "trystan2lemarec@gmail.com";
    $subject = "Nouveau message de ton portfolio";
    $headers = "From: portfolio@trystanlema.fr\r\n";
    $headers .= "Reply-To: portfolio@trystanlema.fr\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    $body  = "Message reçu depuis le formulaire de contact :\n\n";
    $body .= "Prénom : $prenom\n";
    $body .= "Nom : $nom\n";
    $body .= "Message :\n$message\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "<div class='alert alert-success text-center'>Message envoyé avec succès !</div>";
    } else {
        echo "<div class='alert alert-danger text-center'>Erreur lors de l'envoi. Veuillez réessayer.</div>";
    }
}
