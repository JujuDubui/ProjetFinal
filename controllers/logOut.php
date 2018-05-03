<?php
// On prolonge la session
require("models/bdd.php");
require("models/requetes.php");
session_start();
// On teste si la variable de session existe et contient une valeur
if(!empty($_SESSION['login'])){
    $id = $_SESSION['id'];
    $etat = 0;
    Statut($etat,$id);
    session_unset($_SESSION['id']);
    session_destroy($_SESSION['id']);
    session_unset($_SESSION['login']);
    session_destroy($_SESSION['login']);
    if(isset($_SESSION['panier'])){
      session_unset($_SESSION['panier']);
      session_destroy($_SESSION['panier']);
    }
}
else if(!empty($_SESSION['login_admin'])){
    $id = $_SESSION['id_admin'];
    $etat = 0;
    StatutAdmin($etat,$id);
    session_unset($_SESSION['id_admin']);
    session_destroy($_SESSION['id_admin']);
    session_unset($_SESSION['login_admin']);
    session_destroy($_SESSION['login_admin']);
}
header('Location: ../accueil');
?>
