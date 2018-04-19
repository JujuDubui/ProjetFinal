<?php
if(!empty($_POST)){
  if(isset($_POST['nom_jeu'])){
    $nom_jeu = $_POST['nom_jeu'];
    supprimerjeu($nom_jeu);
    header("Location: panier");
  }
  else{
    echo "erreur";
  }
}
?>
