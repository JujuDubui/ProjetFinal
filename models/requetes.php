<?php
function getUser($login) {
	$bdd = db_connect();
	$req = $bdd->query("SELECT * FROM clients WHERE login IN(\"$login\")");
  $info =$req->fetch();
	$req->closeCursor();
	return $info;
}

function getAdmin($login) {
	$bdd = db_connect();
	$req = $bdd->query("SELECT * FROM admin WHERE login IN(\"$login\")");
	$info=$req->fetch();
	$req->closeCursor();
	return $info;
}

function searchjeu($search) {
	$bdd = db_connect();
	$req = $bdd->prepare("SELECT * FROM jeu WHERE nom LIKE concat('%',?,'%')");
	$req->execute(array($search));
  return $req;
}


function Statut($etat,$id) {
    $bdd = db_connect();
    $req = $bdd->prepare('UPDATE clients SET Statut="'.$etat.'" WHERE id_client='.$id);
    $req->execute();
		$req->closeCursor();
		return $req;
}

function StatutAdmin($etat,$id) {
    $bdd = db_connect();
    $req = $bdd->prepare('UPDATE admin SET Statut="'.$etat.'" WHERE id_admin='.$id);
    $req->execute();
		$req->closeCursor();
		return $req;
}

function addUser($login, $passw, $mail, $adress, $datenaiss, $statut){
  $bdd = db_connect();
  $req = $bdd->prepare("INSERT INTO clients(login, passw, mail, adress, datenaiss, Statut) VALUES(?, ?, ?, ?, ?, ?)");
  $req->execute(array($login, $passw, $mail, $adress, $datenaiss, $statut));
  return $req;
}

function addMsg($login, $msg, $idclient){
  $bdd = db_connect();
  $req = $bdd->prepare("INSERT INTO chat(login, msg, idclient, datemsg) VALUES(?, ?, ?, NOW())");
  $req->execute(array($login, $msg, $idclient));
	$req->closeCursor();
  return $req;
}

function addAdminMsg($logadmin, $msg, $idclient){
  $bdd = db_connect();
  $req = $bdd->prepare("INSERT INTO chat(login, msg, idclient, datemsg) VALUES(?, ?, ?, NOW())");
  $req->execute(array($logadmin, $msg, $idclient));
	$req->closeCursor();
  return $req;
}

function addGame($nom , $editeur, $plateforme, $prix, $pegi, $genre, $date, $quantité, $jacket){
  $bdd = db_connect();
  $req = $bdd->prepare("INSERT INTO jeu(nom, editeur, plateform, prix, pegi, genre, date_parution, quantité, jacket) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)");
  $req->execute(array($nom, $editeur, $plateforme, $prix, $pegi, $genre, $date, $quantité, $jacket));
	$req->closeCursor();
  return $req;
}

function allUserInfo(){
	$bdd = db_connect();
	$req = $bdd->query("SELECT * FROM clients");
	return $req;
}


function allAdminInfo(){
	$bdd = db_connect();
	$req = $bdd->query("SELECT * FROM admin");
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
  $req = $bdd->prepare("SELECT * FROM clients WHERE login = ?");
  $req->execute(array($login));
	$info = $req->rowCount();
	return $info;
}

function mailExist($mail) {
  $bdd = db_connect();
  $req = $bdd->prepare("SELECT * FROM clients WHERE mail = ?");
  $req->execute(array($mail));
	$info = $req->rowCount();
	return $info;
}

function gameExist($nom, $plateforme) {
  $bdd = db_connect();
  $req = $bdd->prepare("SELECT * FROM clients WHERE nom = ? AND plateform = ?");
  $req->execute(array($nom, $plateforme));
	$info = $req->rowCount();
	return $info;
}

function Infoid($id){
  $bdd = db_connect();
  $req = $bdd->query("SELECT * FROM clients WHERE id_client=".$id);
  $info=$req->fetch();
	return $info;
}

function InfoGameid($id){
  $bdd = db_connect();
  $req = $bdd->query("SELECT * FROM jeu WHERE id_jeu=".$id);
	$info=$req->fetch();
  return $info;
}

function statutid($id){
  $bdd = db_connect();
  $req = $bdd->query("SELECT * FROM admin WHERE id_admin = ?");
	$req->execute(array($id));
	$info=$req->fetch();
	$req->closeCursor();
	return $info;
}

function InfoGameidnotfectch($id){
  $bdd = db_connect();
  $req = $bdd->query("SELECT * FROM jeu WHERE id_jeu=".$id);
  return $req;
}

function InfoGameplat($plateform){
	$bdd = db_connect();
	$req = $bdd->query("SELECT * FROM jeu WHERE plateform IN (\"$plateform\")");
	return $req;
}

function delUser($id){
  $bdd = db_connect();
  $req = $bdd->query('DELETE FROM clients WHERE id_client = '.$id);
	$req->closeCursor();
  return $req;
}

function delGame($id){
  $bdd = db_connect();
  $req = $bdd->query('DELETE FROM jeu WHERE id_jeu = '.$id);
	$req->closeCursor();
  return $req;
}

function setGameData($id, $prix, $date) {
    $bdd = db_connect();
    $req = $bdd->prepare('UPDATE jeu SET prix="'.$prix.'", date_parution="'.$date.'" WHERE id_jeu='.$id);
    $req->execute();
		$req->closeCursor();
		return $req;
}

function setEmail($id, $email) {
    $bdd = db_connect();
    $req = $bdd->prepare('UPDATE clients SET mail="'.$email.'" WHERE id_client='.$id);
    $req->execute();
		return $req;
}

function setAdress($id, $adresse) {
    $bdd = db_connect();
    $req = $bdd->prepare('UPDATE clients SET adress="'.$adresse.'" WHERE id_client='.$id);
    $req->execute();
		return $req;
}

function setPassword($id, $newpassword) {
    $bdd = db_connect();
    $req = $bdd->prepare('UPDATE clients SET passw="'.$newpassword.'" WHERE id_client='.$id);
    $req->execute();
		return $req;
}

function creationPanier(){
	if(!isset($_SESSION['panier'])){
      $_SESSION['panier'] = array();
			$_SESSION['panier']['id_jeu'] = array();
      $_SESSION['panier']['nom_jeu'] = array();
      $_SESSION['panier']['qte_jeu'] = array();
      $_SESSION['panier']['prix_jeu'] = array();
			$_SESSION['panier']['plateform_jeu'] = array();
			$_SESSION['panier']['verrou'] = false;
   }
   return true;
}

function ajout_panier($id_jeu, $nom_jeu, $prix_jeu, $qte, $plateform){
   //Si le panier existe
   if(creationPanier() && !isVerrouille())
   {
      //Si le produit existe déjà on ajoute seulement la quantité
      $position_jeu = array_search($id_jeu, $_SESSION['panier']['id_jeu']);
      if($position_jeu !== false)
      {
         $_SESSION['panier']['qte_jeu'][$position_jeu] += $qte ;
      }
      else
      {
         //Sinon on ajoute le produit
				array_push($_SESSION['panier']['id_jeu'],$id_jeu);
			 	array_push($_SESSION['panier']['nom_jeu'],$nom_jeu);
			 	array_push($_SESSION['panier']['prix_jeu'],$prix_jeu);
			 	array_push($_SESSION['panier']['qte_jeu'],$qte);
				array_push($_SESSION['panier']['plateform_jeu'],$plateform);
      }
   }
   else echo "Un problème est survenu veuillez contacter l'administrateur du site.";
}

function modif_qte($id_jeu, $qte){
   //Si le panier éxiste
   if (creationPanier() && !isVerrouille())
   {
      //Si la quantité est positive on modifie sinon on supprime l'article
      if ($qte > 0)
      {
         //Recharche du produit dans le panier
         $position_jeu = array_search($id_jeu, $_SESSION['panier']['id_jeu']);
         if($position_jeu !== false) {
						 $_SESSION['panier']['qte_jeu'][$position_jeu] = $qte ;
         }
      }
      else supprimejeu($id_jeu);
   }
   else echo "Un problème est survenu veuillez contacter l'administrateur du site.";
}

function countjeu()
{
   if(isset($_SESSION['panier']))
   return count($_SESSION['panier']['id_jeu']);
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

function supprimejeu($id_jeu){
   //Si le panier existe
   if (creationPanier() && !isVerrouille())
   {
      //Nous allons passer par un panier temporaire
      $tmp=array();
			$tmp['id_jeu'] = array();
      $tmp['nom_jeu'] = array();
      $tmp['qte_jeu'] = array();
      $tmp['prix_jeu'] = array();
			$tmp['plateform_jeu'] = array();
      $tmp['verrou'] = $_SESSION['panier']['verrou'];

      for($i = 0; $i < countjeu($_SESSION['panier']['id_jeu']); $i++)
      {
         if ($_SESSION['panier']['id_jeu'][$i] !== $id_jeu)
         {
					 	array_push($tmp['id_jeu'],$_SESSION['panier']['id_jeu'][$i]);
            array_push($tmp['nom_jeu'],$_SESSION['panier']['nom_jeu'][$i]);
            array_push($tmp['qte_jeu'],$_SESSION['panier']['qte_jeu'][$i]);
            array_push($tmp['prix_jeu'],$_SESSION['panier']['prix_jeu'][$i]);
						array_push($tmp['plateform_jeu'],$_SESSION['panier']['plateform_jeu'][$i]);
         }
      }
      //On remplace le panier en session par notre panier temporaire à jour
      $_SESSION['panier'] =  $tmp;
      //On efface notre panier temporaire
      unset($tmp);
			$_SESSION['nb_jeu'] = countjeu($id_jeu);
   }
   else
   echo "Un problème est survenu veuillez contacter l'administrateur du site.";
}

function supprimePanier(){
  unset($_SESSION['panier']);
	$_SESSION['nb_jeu'] = 0;
}

function addjeuvendu($onum, $panier){
		$bdd = db_connect();
		$req = $bdd->prepare("INSERT INTO jeuxvendu(onum, id_jeu, qte_vendue, prix_unitaire) VALUES(?, ?, ?, ?)");
		for($i=0;$i<countjeu($panier['id_jeu']);$i++){
			$req->execute(array($onum, $panier['id_jeu'][$i], $panier['qte_jeu'][$i], $panier['prix_jeu'][$i]));
		}
		return true;
}

function addcommande($idclient, $total){
  $bdd = db_connect();
  $req = $bdd->prepare("INSERT INTO orders(id_client, prix, odate) VALUES(?, ?, NOW())");
  $req->execute(array($idclient, $total));
  return true;
}

function Lastonum(){
	$bdd = db_connect();
	$req = $bdd->query("SELECT onum FROM orders ORDER BY onum DESC LIMIT 1");
	$info=$req->fetch();
	return $info;
}

function best_game_graphique() {
    $bdd = db_connect();
    $req = $bdd->prepare("SELECT id_jeu, SUM(qte_vendue) mycount FROM jeuxvendu GROUP BY id_jeu ORDER BY mycount DESC");
    $req->execute();
    return $req;
  }

function recupventeclient($id){
	$bdd = db_connect();
	$req = $bdd->prepare("SELECT o.onum,o.prix,o.odate,jv.qte_vendue,jv.prix_unitaire,j.nom,j.editeur,j.plateform,j.jacket
		FROM orders AS o, jeuxvendu AS jv, jeu AS j
		WHERE o.onum=jv.onum AND jv.id_jeu=j.id_jeu AND o.id_client = ? ORDER BY o.onum");
	$req->execute(array($id));
	return $req;
}

function getCommandeAdmin($id) {
    $bdd = db_connect();
    $req = $bdd->prepare('SELECT o.onum,o.prix,o.odate,jv.qte_vendue,jv.prix_unitaire,j.nom,j.editeur,j.plateform,j.jacket,c.login FROM orders AS o, jeuxvendu AS jv, jeu AS j, clients AS c
			WHERE o.onum=jv.onum AND jv.id_jeu=j.id_jeu AND c.id_client=?
      AND o.id_client=? ORDER BY o.odate');
    $req->execute(array($id,$id));
    return $req;
  }
?>
