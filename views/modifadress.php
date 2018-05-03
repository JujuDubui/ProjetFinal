<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Editer Adresse</title>
  </head>
  <body>
      <form method="POST">
          <fieldset>
              <legend>Changer l'Adresse</legend>
                    <p>
                    <label for="adresse">Adresse: </label>
                    <input type="text" name="adresse"/>
                    </p>
                    <p>
                    <label for="password">Confirm. Changement</label>
                    <input type="password" name="password"/>
                    </p>
                    <p>
                    <input type="submit" name="valider" value="Valider" />
                    <a href="profil"><input type="button" name ="retour" value="Retour"></a>
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
