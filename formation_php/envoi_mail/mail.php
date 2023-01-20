<?php

if(!isset($_POST['submit']) && !isset($_POST['email']) 
&& !isset($_POST['message']) ) {
    if(!empty($_POST['name']) && !empty($_POST['email']) 
    && !empty($_POST['message'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $destinataire = "adanledjiambroise@gmail.com";
        $sujet = "Un test de php mail";
        $msg = "Bonjour, vous avez reçu un message de la part de $name, 
        son adresse mail est $email, son message est : $message";

        $headers = "From: $email";

        if (mail($destinataire, $sujet, $msg, $headers)) {
            echo "Votre message a bien été envoyé";
        } else {
            echo "Une erreur s'est produite";
        }
    }else{
        echo "Veuillez remplir tous les champs";
    }
}
    