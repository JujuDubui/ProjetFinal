<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Ajouter jeux</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" href="../css/form.css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    </head>
    <body>
      <div class="container">
        <div class="row">
          <form method="POST" enctype="multipart/form-data" class="col-xs-12 col-sm-12 col-md-12">
                <legend>Ajouter un jeu</legend>
                    <div class="form-group">
                    <input class="form-control" type="text" name="nom" placeholder="Nom du jeu"/>
                    </div>
                    <div class="form-group">
                    <input class="form-control" type="text" name="editeur" placeholder="Editeur"/>
                    </div>
                    <div class="form-group">
                    <input class="form-control" type="text" name="plateforme" placeholder="Plateforme"/>
                    </div>
                    <div class="form-group">
                    <input class="form-control" type="number" name="prix" step="0.01" placeholder="Prix"/>
                    </div>
                    <div class="form-group">
                    <input class="form-control" type="number" name="pegi" placeholder="Pegi" />
                    </div>
                    <div class="form-group">
                    <input class="form-control" type="text" name="genre" placeholder="Genre"/>
                    </div>
                    <div class="form-group">
                    <input class="form-control" type="date" name="date" />
                    </div>
                    <input type="file" id="jacket" name="jacket" accept="image/*"/><br/><br/>
                    <input class="btn btn-success" type="submit" name="formconnexion" value="Ajouter" />
                    <a href="boutique"><input class="btn btn-success" type="button" name ="retour" value="Retour"></a>
            <?php
                if(isset($errorMessage)){
                    echo '<font color="red">'.$errorMessage.'</font>';
                }
            ?>
        </form>
      </div>
    </dib>
  </body>
</html>
