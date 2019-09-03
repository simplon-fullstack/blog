<section>
            <h3>FORMULAIRE DE NEWSLETTER</h3>
            <form method="GET" action="api-json.php" class="ajax">
                <label>
                    nom<input type="text" name="nom" required placeholder="entrez votre nom">
                </label>
                <label>
                    email<input type="email" name="email" required placeholder="entrez votre email">
                </label>
                <button type="submit">inscription à la newsletter</button>
                <div class="confirmation">
                    <!-- ici on affichera le message de confirmation-->
                </div>
                <!-- 
                    PARTIE TECHNIQUE POUR ENVOYER DES INFORMATIONS UTILES POUR NOUS 
                    (INVISIBLE POUR LE VISITEUR)
                -->
                <!-- cette information nous permettra de différencier les formulaires avec PHP -->
                <input type="hidden" name="idFormulaire" value="newsletter">
            </form>
        </section>
