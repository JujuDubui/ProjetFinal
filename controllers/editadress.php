<?php
if(isset($_SESSION['id'])){
  if(!empty($_POST)){
    if(!empty($_POST['password']) && !empty($_POST['adresse'])){
      $adresse = htmlspecialchars($_POST['adresse']);
      $password = md5($_POST['password']);
      $infuser = Infoid($_SESSION['id']);
      if($password==$infuser['passw']){
        setAdress($_SESSION['id'],$adresse);
        header("Location: profil");
      }
      else{
        $errorMessage = "Mot de passe incorrect";
      }
    }
    else{
      $errorMessage="Veuillez remplir les champs";
    }
  }
}
else{
  Header("Location: connexion");
}
?>
