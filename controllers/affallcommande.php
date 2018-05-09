<?php
$title = "Commande";
$repertoire = 'images/img_jeu/';
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  if(!empty($_POST['login'])) {
    $req = getUser($_POST['login']);
    $req2 = getCommandeAdmin($req['id_client']);
    $onum = 0;
    if(empty($req))$errorMessage = "Client inexistant";
    if(empty($req2))$errorMessage = "Le client n'as aucune vente";
  }
}
else{
  header("Location: accueil");
}
?>
