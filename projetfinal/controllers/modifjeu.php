<?php
if(!empty($_POST)){
  if(!empty($_POST['prix']) AND !empty($_POST['date'])){
  $id = $_GET['id'];
  $prix = htmlspecialchars($_POST['prix']);
  $date = $_POST['date'];
  $bdd = db_connect();
  $infogame = InfoGameid($id);
    if($prix==$infogame['prix']){
      $errorMessage="veuillez saisir un autre prix";
    }
    else{
        setGameData($id, $prix, $date);
        header("Location: boutique");
    }
  }
  else{
    $errorMessage = "Veuillez remplir tous les champs svp!";
  }
}
?>
