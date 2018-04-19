<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>S'identifier</title>
    </head>
    <body>
        <form method="POST" action="">
            <fieldset>
                <legend>authentifiez-vous</legend>
                    <p>
                    <label for="loginconnect">Nom d'utilisateur: </label>
                    <input type="text" name="loginconnect" />
                    </p>
                    <p>
                    <label for="mdpconnect">Mot de passe: </label>
                    <input type="password" name="mdpconnect" />
                    <br><br>
                    <input type="submit" name="formconnexion" value="Se connecter" />
                    <a href="accueil"><input type="button" name ="retour" value="Retour"></a>
                    </p>
            </fieldset>
        </form>
        <?php
            if(isset($errorMessage)){
                echo '<font color="red">'.$errorMessage.'</font>';
            }
        ?>
    </body>
</html>
