<?php
if ($_POST){
    $destinataire = 'propcorentin87@gmail.com';
    $sujet = 'CV-Contact';
    $message = $_POST['message'];
    $email = $_POST['email'];

    //validation de l'email
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        echo 'Email invalide';
        exit;
    }

    //header du message
    $header = 'From: ' . $_POST['email'] . "\r\n";
    $header .= 'Reply-TO: ' . $_POST['email'] . "\r\n";
    $header .= 'Content-Type: text/plain; charset=utf-8';
    
    //envoi du mail
    if (mail($destinataire, $sujet, $message, $header)){
        echo 'mail envoyer';
    } else {
        echo 'erreur lors de l envoi duu mail';
    }
}
?>