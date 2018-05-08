<?php
    $title = "Vue commande";
    $repertoire = 'images/img_jeu/';
    $onum = '0';
    if(!empty($_SESSION['login'])) {
      $profil = getUser($_SESSION['login']);
    } else {
      header('Location: accueil');
    }
    $req = recupventeclient($profil['id_client']);
?>
