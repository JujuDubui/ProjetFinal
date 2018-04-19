<?php
function getUser($login) {
	$bdd = db_connect();
	$req = $bdd->query("SELECT * FROM clients WHERE login IN(\"$login\")");
	return $info=$req->fetch();
}

function getAdmin($login) {
	$bdd = db_connect();
	$req = $bdd->query("SELECT * FROM admin WHERE login IN(\"$login\")");
	return $info=$req->fetch();
}

function setData($id, $login, $mdp) {
    $bdd = db_connect();
    $req = $bdd->prepare('UPDATE clients SET login="'.$login.'", passw="'.$mdp.'" WHERE id_client='.$id);
    $req->execute();
}

function addUser($login, $passw, $mail, $adress, $datenaiss){
  $bdd = db_connect();
  $req = $bdd->prepare("INSERT INTO clients(login, passw, mail, adress, datenaiss) VALUES(?, ?, ?, ?, ?)");
  $req->execute(array($login, $passw, $mail, $adress, $datenaiss));
  return $req;
}

function addMsg($login, $msg, $idclient){
  $bdd = db_connect();
  $req = $bdd->prepare("INSERT INTO chat(login, msg, idclient, datemsg) VALUES(?, ?, ?, NOW())");
  $req->execute(array($login, $msg, $idclient));
  return $req;
}

function addAdminMsg($logadmin, $msg, $idclient){
  $bdd = db_connect();
  $req = $bdd->prepare("INSERT INTO chat(login, msg, idclient, datemsg) VALUES(?, ?, ?, NOW())");
  $req->execute(array($logadmin, $msg, $idclient));
  return $req;
}

function addGame($nom , $editeur, $plateforme, $prix, $pegi, $genre, $date, $quantité, $jacket){
  $bdd = db_connect();
  $req = $bdd->prepare("INSERT INTO jeu(nom, editeur, plateform, prix, pegi, genre, date_parution, quantité, jacket) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)");
  $req->execute(array($nom, $editeur, $plateforme, $prix, $pegi, $genre, $date, $quantité, $jacket));
  return $req;
}

function allUserInfo(){
	$bdd = db_connect();
	$req = $bdd->query("SELECT * FROM clients");
	return $req;
}

function allGameInfo(){
	$bdd = db_connect();
	$req = $bdd->query("SELECT * FROM jeu ORDER BY plateform");
	return $req;
}

function allChatMsg($idclient) {
	$bdd = db_connect();
	$req = $bdd->query("SELECT * FROM chat WHERE idclient IN (\"$idclient\") ORDER BY datemsg DESC");
	return $req;
}

function logExist($login) {
  $bdd = db_connect();
  $reponse = $bdd->prepare("SELECT * FROM clients WHERE login = ?");
  $reponse->execute(array($login));
  return $reponse->rowCount();
}

function mailExist($mail) {
  $bdd = db_connect();
  $reponse = $bdd->prepare("SELECT * FROM clients WHERE mail = ?");
  $reponse->execute(array($mail));
  return $reponse->rowCount();
}

function gameExist($nom, $plateforme) {
  $bdd = db_connect();
  $reponse = $bdd->prepare("SELECT * FROM clients WHERE nom = ? AND plateform = ?");
  $reponse->execute(array($nom, $plateforme));
  return $reponse->rowCount();
}

function Infoid($id){
  $bdd = db_connect();
  $requser = $bdd->query("SELECT * FROM clients WHERE id_client=".$id);
  return $info=$requser->fetch();
}

function InfoGameid($id){
  $bdd = db_connect();
  $requser = $bdd->query("SELECT * FROM jeu WHERE id_jeu=".$id);
  return $info=$requser->fetch();
}

function InfoGameplat($plateform){
	$bdd = db_connect();
	$req = $bdd->query("SELECT * FROM jeu WHERE plateform IN (\"$plateform\")");
	return $req;
}

function delUser($id){
  $bdd = db_connect();
  $req = $bdd->query('DELETE FROM clients WHERE id_client = '.$id);
  return $req;
}

function delGame($id){
  $bdd = db_connect();
  $req = $bdd->query('DELETE FROM jeu WHERE id_jeu = '.$id);
  return $req;
}

function setGameData($id, $prix, $date) {
    $bdd = db_connect();
    $req = $bdd->prepare('UPDATE jeu SET prix="'.$prix.'", date_parution="'.$date.'" WHERE id_jeu='.$id);
    $req->execute();
}

function creationPanier(){
	if(!isset($_SESSION['panier'])){
      $_SESSION['panier'] = array();
      $_SESSION['panier']['nom_jeu'] = array();
      $_SESSION['panier']['qte_jeu'] = array();
      $_SESSION['panier']['prix_jeu'] = array();
			$_SESSION['panier']['verrou'] = false;
   }
   return true;
}

function ajout_panier($id_jeu, $nom_jeu, $prix_jeu, $qte){
   //Si le panier existe
   if(creationPanier() && !isVerrouille())
   {
      //Si le produit existe déjà on ajoute seulement la quantité
      $position_jeu = array_search($nom_jeu, $_SESSION['panier']['nom_jeu']);
      if($position_jeu !== false)
      {
         $_SESSION['panier']['qte_jeu'][$position_jeu] += $qte ;
      }
      else
      {
         //Sinon on ajoute le produit
			 	array_push($_SESSION['panier']['nom_jeu'],$nom_jeu);
			 	array_push($_SESSION['panier']['prix_jeu'],$prix_jeu);
			 	array_push($_SESSION['panier']['qte_jeu'],$qte);
      }
   }
   else echo "Un problème est survenu veuillez contacter l'administrateur du site.";
}

function modif_qte($nom_jeu, $qte){
   //Si le panier éxiste
   if (creationPanier() && !isVerrouille())
   {
      //Si la quantité est positive on modifie sinon on supprime l'article
      if ($qte > 0)
      {
         //Recharche du produit dans le panier
         $position_jeu = array_search($nom_jeu, $_SESSION['panier']['nom_jeu']);
         if($position_jeu !== false) {
						 $_SESSION['panier']['qte_jeu'][$position_jeu] = $qte ;
         }
      }
      else supprimejeu($nom_jeu);
   }
   else echo "Un problème est survenu veuillez contacter l'administrateur du site.";
}

function countjeu()
{
   if(isset($_SESSION['panier']))
   return count($_SESSION['panier']['nom_jeu']);
   else
   return 0;
}

function isVerrouille(){
   if (isset($_SESSION['panier']) && $_SESSION['panier']['verrou'])
   return true;
   else
   return false;
}

function MontantGlobal(){
   $total=0;
   for($i = 0; $i < count($_SESSION['panier']['nom_jeu']); $i++)
   {
      $total += $_SESSION['panier']['qte_jeu'][$i] * $_SESSION['panier']['prix_jeu'][$i];
   }
   return $total;
}

function supprimejeu($nom_jeu){
   //Si le panier existe
   if (creationPanier() && !isVerrouille())
   {
      //Nous allons passer par un panier temporaire
      $tmp=array();
      $tmp['nom_jeu'] = array();
      $tmp['qte_jeu'] = array();
      $tmp['prix_jeu'] = array();
      $tmp['verrou'] = $_SESSION['panier']['verrou'];

      for($i = 0; $i < count($_SESSION['panier']['nom_jeu']); $i++)
      {
         if ($_SESSION['panier']['nom_jeu'][$i] !== $nom_jeu)
         {
            array_push($tmp['nom_jeu'],$_SESSION['panier']['nom_jeu'][$i]);
            array_push($tmp['qte_jeu'],$_SESSION['panier']['qte_jeu'][$i]);
            array_push($tmp['prix_jeu'],$_SESSION['panier']['prix_jeu'][$i]);
         }
      }
      //On remplace le panier en session par notre panier temporaire à jour
      $_SESSION['panier'] =  $tmp;
      //On efface notre panier temporaire
      unset($tmp);
   }
   else
   echo "Un problème est survenu veuillez contacter l'administrateur du site.";
}

function supprimePanier(){
   unset($_SESSION['panier']);
}
?>
