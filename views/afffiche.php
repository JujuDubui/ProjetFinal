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
              <a href="#"><input type="button" value="Acceder a la boutique"></a>
              <br>
              </div>
  </div>
<?php } ?>
