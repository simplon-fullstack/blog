<section>
    <h3>Galerie</h3>
    <div class="listePhoto">

<?php
// AFFICHER LES IMAGES DU DOSSIER assets/album1/
// récupérer la liste des fichiers
$tabPhoto = glob("assets/album1/*.jpeg");
// parcourir le tableau des fichiers
foreach($tabPhoto as $photo)
{
    echo
<<<CODEHTML
    <img src="$photo" alt="$photo" title="$photo">
CODEHTML;

}
?>
    </div>
</section>