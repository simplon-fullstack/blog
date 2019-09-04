<?php

// LE CODE POUR TRAITER LE FORMULAIRE contact
// JE DOIS TRAITER LE FORMULAIRE DE NEWSLETTER
$nom    = $_REQUEST["nom"] ?? "";
$email  = $_REQUEST["email"] ?? "";
$message = $_REQUEST["message"] ?? "";

// ON VA MEMORISER L'INSCRIPTION DANS UN FICHIER CSV
// php/model/contact.txt
// attention au HEREDOC: ne pas mettre d'espace au début ou à la fin
$ligne = 
<<<CODETEXT
-------------
Nom: $nom
Email: $email
Message:
$message

CODETEXT;

// JE VAIS CREER UN FICHIER DIFFERENT POUR CHAQUE MESSAGE
// php/model/contact-20190904-100823.txt
// https://www.php.net/manual/fr/function.date.php
$date = date("Ymd-His");
$nomFichier = "php/model/contact-$date.txt";
file_put_contents($nomFichier, $ligne, FILE_APPEND);

// envoyer un email
@mail("webmaster@monsite.fr", "nouveau message contact", $ligne);

// message à afficher au visiteur
$confirmation = "merci $nom pour votre message.";

