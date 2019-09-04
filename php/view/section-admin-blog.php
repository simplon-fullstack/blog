
<section>
    <h3>FORMULAIRE DE CREATION D'ARTICLE DE BLOG</h3>
    <!-- ON VA AJOUTER UN FORMULAIRE DE CONTACT -->
    <form method="GET" action="api-json.php">
        <label>
            <span>Titre</span>
            <input type="text" name="titre" required placeholder="entrez votre titre">
        </label>
        <label>
            <span>Contenu</span>
            <textarea name="contenu" cols="80" rows="10" required placeholder="entrez votre contenu"></textarea>
        </label>
        <label>
            <span>Photo</span>
            <select name="photo">
                <option value="assets/images/photo1.jpg">photo1</option>
                <option value="assets/images/photo2.jpg">photo2</option>
                <option value="assets/images/photo3.jpg">photo3</option>
                <option value="assets/images/photo4.jpg">photo4</option>
                <option value="assets/images/photo5.jpg">photo5</option>
            </select>
        </label>
        <button type="submit">PUBLIER VOTRE ARTICLE</button>
        <div class="confirmation">
            <!-- ICI ON VERRA LE MESSAGE DE CONFIRMATION -->
        </div>
        <!-- PARTIE TECHNIQUE -->
        <input type="hidden" name="idFormulaire" value="blog">
    </form>
</section>