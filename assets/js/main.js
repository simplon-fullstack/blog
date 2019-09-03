console.log('JS chargé');


var listeFormAjax = document.querySelectorAll("form.ajax");
listeFormAjax.forEach(function(formulaire){
    // on ajoute un event listener sur 'submit'
    formulaire.addEventListener('submit', function(event){
        event.preventDefault(); // bloque l'envoi classique du formulaire

        // ON VA RECUPERER LES INFOS DU FORMULAIRE
        var formData = new FormData(this);

        // JE PEUX ENVOYER UNE REQUETE AJAX AVEC fetch
        fetch('api-json.php', {
                method: "POST",
                body: formData      // LES INFOS DU FORMULAIRE SONT ENVOYEES AUSSI
        })
        .then((response) => {
            // COOL AVEC JS
            // JE PEUX DEMANDER A RECUPERER UN OBJET JSON A PARTIR DU TEXTE JSON
            return response.json();
        })
        .then((objetJSON) => {
            // JE VEUX RECUPERER LA PROPRIETE confirmation
            // ET JE VEUX MODIFIER LE TEXTE DE LA BALISE div.confirmation AVEC CE TEXTE
            this.querySelector('div.confirmation').innerHTML = objetJSON.confirmation;

        });
    });
})                
