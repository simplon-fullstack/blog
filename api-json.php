<?php

// JE SUIS DANS LE MONDE PHP
// JE PEUX RECUPERER DES INFORMATIONS DE FORMULAIRE
$nom    = $_REQUEST["nom"] ?? "(vide)";
$email  = $_REQUEST["email"] ?? "(vide)";


// ON VA MEMORISER L'INSCRIPTION DANS UN FICHIER CSV
// php/model/newsletter.csv
$ligne = "$nom,$email\n";
file_put_contents("php/model/newsletter.csv", $ligne, FILE_APPEND);

// TABLEAU ASSOCIATIF PHP
// JE PEUX UTILISER LA FONCTION json_encode QUI VA PRODUIRE LE TEXTE JSON CORRESPONDANT
// TRADUCTEUR PHP => TEXTE JSON
// https://www.php.net/manual/fr/function.json-encode.php
$tableauAssociatif = [
    "prop1" => "valeur1",
    "prop2" => "valeur2",
    "date"  => date("Y-m-d H:i:s"),
    "confirmation" => "merci $nom de votre inscription à la newsletter"
];


// EN PHP JE CREE UN TABLEAU DE PRODUITS
$tableauProduit = [
    [ "nom" => "iphone1", "prix" => "100" ],
    [ "nom" => "iphone2", "prix" => "200" ],
    [ "nom" => "iphone3", "prix" => "300" ],
];
// JE VAIS AJOUTER CE TABLEAU DE PRODUIT DANS LE TABLEAU ASSOCIATIF
$tableauAssociatif["listeProduit"] = $tableauProduit;

$texteJSON = json_encode($tableauAssociatif, JSON_PRETTY_PRINT);

/*
$texteJSON = 
<<<CODEJSON
{
    "prop1" : "valeur1",
    "prop2" : "valeur2",
    "confirmation": "merci $nom de votre inscription à la newsletter"
}
CODEJSON;
*/

echo $texteJSON;

?>
