<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Ajouter jeux</title>
    </head>
    <body>
        <form method="POST" enctype="multipart/form-data">
            <fieldset>
                <legend>Ajouter un jeu</legend>
                    <p>
                    <label for="nom">Nom : </label>
                    <input type="text" name="nom" />
                    </p>
                    <p>
                    <label for="editeur">Editeur : </label>
                    <input type="text" name="editeur" />
                    </p>
                    <p>
                    <label for="plateforme">Plateforme : </label>
                    <input type="text" name="plateforme" />
                    </p>
                    <p>
                    <label for="prix">Prix : </label>
                    <input type="number" name="prix" step="0.01" value="0"/>
                    </p>
                    <p>
                    <label for="pegi">Pegi : </label>
                    <input type="number" name="pegi" value="0" />
                    </p>
                    <p>
                    <label for="genre">Genre : </label>
                    <input type="text" name="genre" />
                    </p>
                    <p>
                    <label for="date">Date de Parution : </label>
                    <input type="date" name="date" />
                    </p>
                    <input type="file" id="jacket" name="jacket" accept="image/*"/><br/><br/>
                    <input type="submit" name="formconnexion" value="Ajouter" />
                    <a href="boutique"><input type="button" name ="retour" value="Retour"></a>
                    </p>
            </fieldset>
            <?php
                if(isset($errorMessage)){
                    echo '<font color="red">'.$errorMessage.'</font>';
                }
            ?>
        </form>
    </body>
</html>
