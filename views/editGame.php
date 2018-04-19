<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Editer</title>
  </head>
  <body>
      <form method="POST">
          <fieldset>
              <legend>Changer les champs suivant</legend>
                    <p>
                    <label for="prix">Prix: </label>
                    <input type="number" name="prix" step="0.01" />
                    </p>
                    <p>
                    <label for="date">Date de sortie: </label>
                    <input type="date" name="date" />
                    </p>
                    <p>
                    <input type="submit" name="valider" value="Valider" />
                    <a href="boutique"><input type="button" name ="retour" value="Retour"></a>
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
