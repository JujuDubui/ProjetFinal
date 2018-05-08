<?php
if(isset($_SESSION['id'])){
  if(!empty($_POST)){
    if(!empty($_POST['newpassword']) && !empty($_POST['password']) && !empty($_POST['confpassword'])){
      $newpassword = md5($_POST['newpassword']);
      $password = md5($_POST['password']);
      $confpassword = md5($_POST['confpassword']);
      $infuser = Infoid($_SESSION['id']);
      if($newpassword==$confpassword){
          if($password==$infuser['passw']){
            setPassword($_SESSION['id'],$newpassword);
            header("Location: profil");
          }
          else{
            $errorMessage = "Mot de passe incorrect";
          }
        }
        else{
          $errorMessage = "Les mots de passe ne correspondent pas";
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
