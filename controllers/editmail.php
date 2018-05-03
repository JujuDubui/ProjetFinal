<?php
if(isset($_SESSION['id'])){
  if(!empty($_POST)){
    if(!empty($_POST['email']) && !empty($_POST['email'])){
      $email = htmlspecialchars($_POST['email']);
      $password = md5($_POST['password']);
      $infuser = Infoid($_SESSION['id']);
      if($password==$infuser['passw']){
        setEmail($_SESSION['id'],$email);
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
