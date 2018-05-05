<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
  if(!empty($_POST['password'])){
    $infuser = Infoid($_SESSION['id']);
    $password = md5($_POST['password']);
    if($infuser['passw']==$password){
      $req = false;
      $add = false;
      $idclient = $_SESSION['id'];
      $total = MontantGlobal();
      $req = addcommande($idclient, $total);
      $onum = Lastonum();
      $add = addjeuvendu($onum['onum'], $_SESSION['panier']);
      if($req && $add){
        supprimePanier();
        header("Location:boutique");
      }
      else{
        echo 'Erreur';
      }
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
