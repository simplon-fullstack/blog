# blog

    Site Blog

    ON MET EN PLACE LE SITE BLOG


    ON VA CREER UN DOSSIER assets/ QUI VA CONTENIR DES SOUS-DOSSIERS

    assets/css/
    assets/js/
    assets/images/
    assets/fonts/

    => LE DOSSIER assets/ CONTIENT TOUS LES FICHIERS QUE LE NAVIGATEUR PEUT CHARGER

    ON PEUT CREER UN DOSSIER php/
    QUI VA CONTENIR LE CODE QUI NE SERA PAS ACCESSIBLE AU NAVIGATEUR

    ON VA PROTEGER CE DOSSIER php/ AVEC UN FICHIER .htaccess

    php/.htaccess   => "require all denied"

    * POUR PREPARER L'ORGANISATION MVC

    php/model/
    php/view/
    php/controller/

    Model           => Modele
    View            => Vue
    Controller      => Controleur

    DANS LE MONDE INDUSTRIEL, 
    ON PART DE MATIERES PREMIERES 
    ET ON FABRIQUE UN PRODUIT

    DANS LE MONDE DU WEB, 
    ON PART DE DONNEES              => MODEL
    ET ON FABRIQUE DES PAGES WEB    => VIEW (CE QUE VOIT LE VISITEUR)


    MODEL + VIEW => PRODUIRE DU SERVEUR WEB VERS LE NAVIGATEUR

    CONTROLLER
    (ROLE: VERIFIER QUE CE QUI VIENT DE L'EXTERIEUR N'EST PAS DANGEREUX)
    => ON RECOIT DES INFOS DE L'EXTERIEUR 
    => ET ON DOIT LES TRAITER
    => TRAITEMENT DES FORMULAIRES

    CONTROLLER
    NAVIGATEUR ENVOIE DES DONNEES VERS LE SERVEUR WEB


    COTE NAVIGATEUR, VOUS FAITES DEJA DU MVC
    HTML        MODEL
    CSS         VIEW
    JS          CONTROLLER



## Application Programming Interface (API)

ON VA CENTRALISER LES APPELS AJAX VERS api.php


## POUR DEMARRER

    RECONSTRUIRE LE SITE VITRINE DANS CETTE NOUVELLE ORGANISATION MVC

    * CREER LES PAGES EN HTML, CSS

    PAGE ACCUEIL    index.php
    PAGE GALERIE    galerie.php
    PAGE CONTACT    contact.php
    PAGE BLOG       blog.php

    DECOUPER LES PAGES EN TRANCHES DE FICHIERS PHP
    => DU COTE SERVEUR LE HTML DEVIENT LA PARTIE VIEW

    php/view/header.php
    php/view/footer.php
    php/view/section-index.php
    etc...


## SI ON REPART DE ZERO

    UN CLIENT QUI VOUS DEMANDE DE CREER UN SITE BLOG
    (PERSONA...)

    BLOG = SITE VITRINE + PAGE BLOG

    * ETAPE1: FAIRE LA LISTE DES PAGES DU SITE

    Accueil         index.php
    Blog            blog.php
    Galerie         galerie.php
    Contact         contact.php

    * ETAPE2: CREER LES FICHIERS POUR CHAQUE PAGE

    * ETAPE3: COMMENCER A CODER index.php


    * CODER LE HTML
    * RELIER LE HTML AU CSS AVEC UNE BALISE link

        assets/css/style.css

    * RELIER LE HTML AU JS AVEC UNE BALISE script

        assets/js/main.js

    * AJOUTER UN FORMULAIRE DE NEWSLETTER

        <form method="GET" action="api-json.php">

    CREER LE FICHIER api-json.php POUR RECEVOIR LES INFOS DES FORMULAIRES
    (PAS UNE PAGE POUR LES VISITEURS...)

    * AJOUTER UN CHAMP input type="hidden" QUI NOUS SERT A DIFFERENCIER LES FORMULAIRES


    ETAPE4: AJOUTER LE MENU nav DANS header

    ETAPE5: DECOUPER MON HTML EN PLUSIEURS FICHIERS PHP

    CREER LES FICHIERS DANS php/view/

        php/view/header.php
        php/view/footer.php
        php/view/section-index.php
        php/view/section-blog.php
        php/view/section-galerie.php
        php/view/section-contact.php

    AJOUTER LES require DANS LES AUTRES PAGES DU SITE

```php
<?php

// fichier: index.php
// ON UTILISE PHP COMME MOTEUR DE TEMPLATE
// => OUTIL POUR NOUS AIDER A CREER DES PAGES WEB
// https://www.php.net/manual/fr/function.require.php

require "php/view/header.php";
require "php/view/section-index.php";
require "php/view/footer.php";

```




