<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
  if(!empty($_POST['password'])){
    $infuser = Infoid($_SESSION['id']);
    $password = md5($_POST['password']);
    if($infuser['passw']==$password){
      $idjeu = conca_id($_SESSION['panier']['id_jeu']);
      $idclient = $_SESSION['id'];
      $total = MontantGlobal();
      $req = addcommande($idclient, $idjeu, $total);
      supprimePanier();
      header("Location:boutique");
    }
    else{
      $errorMessage = "Mot de passe incorrect";
    }
  }
  else{
    $errorMessage = "Veuillez remplir le champ!";
  }
}
?>
