<?php
  session_start();
  require('models/bdd.php');
  require('models/requetes.php');
  $bdd = db_connect();
  $id = $_GET['id'];
  $req = delGame($id);
  header('Location: boutique');
?>
