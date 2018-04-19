<?php
session_start();
require('models/bdd.php');
require('models/requetes.php');
if($_POST){
    if(!empty($_POST['id'])){
      creationpanier();
      $id = $_POST['id'];
      $infogame = InfoGameid($id);
      $id_jeu = $infogame['id_jeu'];
      $nom_jeu = $infogame['nom'];
      $prix_jeu = $infogame['prix'];
      $qte = 1;
      ajout_panier($id_jeu, $nom_jeu, $prix_jeu, $qte);
      header('Location: boutique');
   }
}
?>
