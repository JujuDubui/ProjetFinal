<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>S'identifier</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" href="../css/form.css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    </head>
    <body>
      <div class="container">
        <div class="row">
        <form method="POST" class="col-xs-12 col-sm-12 col-md-12">
                <legend>authentifiez-vous</legend>
                    <div class="form-group">
                    <input class="form-control" type="text" name="loginconnect" placeholder="Login"/>
                    </div>
                    <div class="form-group">
                    <input class="form-control" type="password" name="mdpconnect" placeholder="Mot de passe"/>
                    </div>
                    <button type="submit" class="btn btn-success">Connexion<i class="glyphicon glyphicon-send"></i></button>
                    <<a href="accueil"><input class="btn btn-success" type="button" name="retour" value="Retour"></a>
        </form>
        <?php
            if(isset($errorMessage)){
                echo '<font color="red">'.$errorMessage.'</font>';
            }
        ?>
      </div>
    </div>
    </body>
</html>
