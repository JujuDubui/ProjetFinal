<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" href="../css/form.css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <title>inscription</title>
    </head>
    <body>
      <div class="container">
        <div class="row">
        <form method="post" class="col-xs-12 col-sm-12 col-md-12">
                <legend>inscrivez-vous</legend>
                <div class="form-group">
                <input class="form-control" type="text" name="login" id="login" placeholder="Login" />
                </div>
                <div class="form-group">
                <input class="form-control" type="password" name="password" id="password" placeholder="Mot de passe" />
                </div>
                <div class="form-group">
                <input class="form-control" type="password" name="confpassword" id="confpassword" placeholder="Confirmer Mot de passe" />
                </div>
                <div class="form-group">
                <input class="form-control" type="email" name="email" id="email" placeholder="Mail" />
                </div>
                <div class="form-group">
                <input class="form-control" type="text" name="adresse" id="adresse" placeholder="Adresse" />
                </div>
                <div class="form-group">
                <input class="form-control" type="date" name="datenaiss" id="datenaiss" placeholder="Date de naissance" />
                </div>
                <button type="submit" class="btn btn-success">Submit <i class="glyphicon glyphicon-send"></i></button>
                <a href="accueil"><input class="btn btn-success" type="button" name="retour" value="Retour"></a>
        </form>
        <?php
        // Rencontre-t-on une erreur ?
            if(isset($errorMessage)){
                echo '<font color="red">'.$errorMessage."</font>";
            }
        ?>
      </div>
    </div>
    </body>
</html>
