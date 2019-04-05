<div id="connexion" >
    <form action="controller/action_connexion.php" method="post" style="display: inline-block">
        <label for="login">Login</label>
        <input type="text" name="login" id="login" class="background_connection" style="width: 150px;height: 20px">
        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password" class="background_connection" style="width: 150px; height: 20px">
        <input type="submit" value="Connexion" name="connexion">
    </form>
    <a href="inscription.php">
        <p style="display: inline-block">
            <input type="submit" value="Inscription">
        </p>
    </a>
</div>