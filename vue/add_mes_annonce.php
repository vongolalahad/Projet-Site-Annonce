<aside>
    <div>
        <h3>Passer une annonce </h3>
    </div>
    <form action="../controller/action_annonce.php" method="post" enctype="multipart/form-data">
        <p>
            <label for="categorie">Catégorie:</label>
            <?php
            include ('select_categorie.php');
            ?>
            <label for="titre">Titre:</label>
            <input type="text" maxlength="33" placeholder="maximum 33 lettres" name="titre" id="titre" style="height: 20px;width: 150px"><br><br>
            <textarea name="description" id="description" cols="50" rows="10">Description</textarea><br><br>
            <label for="fichier">Fichier</label>
            <input type="file" name="monfichier" id="fichier" /><br/><br>
            <input type="submit" value="Valider" />
        </p>
    </form>
</aside>
