<?php
    $title = "Vue commande";
    $repertoire = 'images/img_jeu/';
    if(!empty($_SESSION['login'])) {
      $profil = getUser($_SESSION['login']);
    }
    else if(!empty($_SESSION['login_admin'])) {
      $profil = allUserInfo()->fetch();
    }
    else {
      header('Location: accueil');
    }
    $req = recupventeclient($profil['id_client']);
    $onum = '0';
?>
