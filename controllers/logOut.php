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
    session_unset(); // unset $_SESSION variable for the run-time
    session_destroy(); // destroy session data in storage
}
else if(!empty($_SESSION['login_admin'])){
    $id = $_SESSION['id_admin'];
    $etat = 0;
    StatutAdmin($etat,$id);
    session_unset(); // unset $_SESSION variable for the run-time
    session_destroy(); // destroy session data in storage
}
header('Location: ../accueil');
?>
