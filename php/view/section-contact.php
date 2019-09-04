<section>
    <h3>Contact</h3>
    <!-- ON VA AJOUTER UN FORMULAIRE DE CONTACT -->
    <form method="GET" action="api-json.php">
        <label>
            Nom
            <input type="text" name="nom" required placeholder="entrez votre nom">
        </label>
        <label>
            Email
            <input type="email" name="email" required placeholder="entrez votre email">
        </label>
        <label>
            Message
            <textarea name="message" cols="80" rows="5" required placeholder="entrez votre message"></textarea>
        </label>
        <button type="submit">ENVOYER VOTRE MESSAGE</button>
        <div class="confirmation">
            <!-- ICI ON VERRA LE MESSAGE DE CONFIRMATION -->
        </div>
        <!-- PARTIE TECHNIQUE -->
        <input type="hidden" name="idFormulaire" value="contact">
    </form>
</section>