<?php
if ($_POST){
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'propcorentin87@gmail.com';
    $sujet = 'Message depuis CV';

    $header = "From: $email";

    mail($to, $sujet, $message, $header);
    echo 'message envoyé';
}
?>