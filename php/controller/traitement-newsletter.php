<?php

// JE DOIS TRAITER LE FORMULAIRE DE NEWSLETTER
$nom    = $_REQUEST["nom"] ?? "";
$email  = $_REQUEST["email"] ?? "";


// ON VA MEMORISER L'INSCRIPTION DANS UN FICHIER CSV
// php/model/newsletter.csv
$ligne = "$nom,$email\n";
file_put_contents("php/model/newsletter.csv", $ligne, FILE_APPEND);

// envoyer un email
@mail("webmaster@monsite.fr", "nouvelle inscription newsletter", $ligne);

// message à afficher au visiteur
$confirmation = "merci $nom de votre inscription à la newsletter";
