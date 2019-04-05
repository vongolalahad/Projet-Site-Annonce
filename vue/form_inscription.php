<div class="titre">
    <h1 class="inscription">Créer un compte</h1>
</div>
    <form action="controller/action_inscription.php" method="post">
        <table id="inscription_position">
            <tr>
                <td>
                    <label for="login">Login</label><br>
                    <input type="text" name="login" id="login"/><br>
                </td>
                <td>
                    <label for="prenom">Prénom</label><br>
                    <input type="text" name="prenom" id="prenom"/><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="nom">Nom</label><br>
                    <input type="text" name="nom" id="nom"/><br>
                </td>
                <td>
                    <label for="email">E-Mail</label><br>
                    <input type="email" name="email" id="email"/><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="tel">Téléphone</label><br>
                    <input type="text" name="telephone" id="tel"/><br>
                </td>
                <td>
                    <label for="password">Mot de passe</label><br>
                    <input type="password" name="password" id="password"/><br>
                </td>
            </tr>
        </table>
        <table>
            <tr>
                <td>
                    <input type="submit" value="Valider" name="save_inscription" />
                </td>
                <td>
                    <input type="reset" value="Annuler"><br><br>
                </td>
            </tr>
        </table>
    </form>