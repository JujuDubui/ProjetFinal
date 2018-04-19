<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>inscription</title>
    </head>
    <body>
        <form method="post">
            <fieldset>
                <legend>inscrivez-vous</legend>
                <p>
                <label for="login">Nom d'utilisateur: </label>
                <input type="text" name="login" id="login" value="" />
                </p>
                <p>
                <label for="password">Mot de passe: </label>
                <input type="password" name="password" id="password" value="" />
                </p>
                <p>
                <label for="confpassword">Confirmation mot de passe: </label>
                <input type="password" name="confpassword" id="confpassword" value="" />
                </p>
                <p>
                <label for="email">Email: </label>
                <input type="email" name="email" id="email" placeholder="example@gmail.com" />
                </p>
                <p>
                <label for="adresse">Adresse: </label>
                <input type="text" name="adresse" id="adresse" placeholder="adresse+numero" />
                </p>
                <p>
                <label for="datenaiss">Date de naissance: </label>
                <input type="date" name="datenaiss" id="datenaiss"  />
                <br>
                <br>
                <input type="submit" name="submit" value="S'inscrire" />
                <a href="accueil"><input type="button" value="Retour"></a>
                </p>
            </fieldset>
        </form>
        <?php
        // Rencontre-t-on une erreur ?
            if(isset($errorMessage)){
                echo '<font color="red">'.$errorMessage."</font>";
            }
        ?>
    </body>
</html>
