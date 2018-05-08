<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Editer mot de passe</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="../css/form.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <form method="POST" class="col-xs-12 col-sm-12 col-md-12">
              <legend>Changer le mot de passe</legend>
                    <div class="form-group">
                    <input class="form-control" type="password" name="newpassword" placeholder="Nouveau mot de passe"/>
                    </div>
                    <div class="form-group">
                    <input class="form-control" type="password" name="confpassword" placeholder="Confirmation du nouveau mot de passe"/>
                    </div>
                    <div class="form-group">
                    <input class="form-control" type="password" name="password" placeholder="Confirmer avec  l'ancien mot de passe"/>
                    </div>
                    <input class="btn btn-success" type="submit" name="valider" value="Valider"/>
                    <a href="profil"><input class="btn btn-success" type="button" name ="retour" value="Retour"></a>
        </form>
      </div>
    </div>
      <?php
      if(isset($errorMessage)){
        echo '<font color="red">'.$errorMessage.'</font>';
       }
      ?>
  </body>
</html>
