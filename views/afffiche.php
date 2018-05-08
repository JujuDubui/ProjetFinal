<?php
$requser = InfoGameidnotfectch($_SESSION['id_jeu']);
while($donnees=$requser->fetch()){
?>
<div class="container">
              <div align="center">
              <h2>Fiche de <?=$donnees['nom']?></h2>
              <br>
              <?php $repertoire = 'images/img_jeu/'; ?>
              <img alt="<?=$donnees['nom']?>" src="<?=$repertoire.$donnees['jacket']?>">
              <br>
              <label>Nom du jeu : <?=$donnees['nom']?></label>
              <br>
              <label>Date de sortie : <?=$donnees['date_parution']?></label>
              <br>
              <label>Pegi : <?=$donnees['pegi']?></label>
              <br>
              <label>Plateforme : <?=$donnees['plateform']?></label>
              <br>
              <label>Prix : <?=$donnees['prix']?> €</label>
              <br>
              <?php if(!isset($_SESSION['id'])){ ?>
              <a href="connexion"><input type="button" value="Ajouter au panier"></a>
              <?php } else{ ?>
                <form action="ajout_panier" method="post">
                    <input type="hidden" name="id" value=<?=$donnees['id_jeu']?>>
                    <input value="Ajouter au panier" class="btn btn-sm btn-outline-secondary" type="submit">
                 </form>
              <?php } ?>
              <br>
              </div>
  </div>
<?php } ?>
