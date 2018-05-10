<?php
if(isset($_SESSION['id_admin'])){
  $req = best_game_graphique();
  $resultat = array();
   while($result=$req->fetch()) {
    $req2 = InfoGameid($result['id_jeu']);
    $info = "";
    $info = $req2['nom']."|".$result['mycount'];
    array_push($resultat, $info);
  } $req->closeCursor();
}
?>
