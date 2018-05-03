<?php
	if(isset($_SESSION['login']) && !isset($_SESSION['login_admin'])){
		$login = htmlspecialchars($_SESSION['login']);
		$infuser = getUser($login);
		$idclient= intval($infuser['id_client']);
	  $requser = allChatMsg($idclient);
		$req = allAdminInfo();
		$info = $req->fetch();
     while($donnees=$requser->fetch()){
       ?>
  	 	<div class="container">
    		<div class="row">
						<div class="col-md-3">[<?=$donnees['datemsg'] ?>]</div>
            <div class="col-md-2"><?=$donnees['login'] ?></div>
            <div class="col-md-6"><?=$donnees['msg'] ?></div>
    		</div>
  		</div>
			<?php
				}
			}
		else if(isset($_SESSION['login_admin'])){
			if(isset($_POST['login'])){
				$login = htmlspecialchars($_POST['login']);
			}
			else{
				$login = htmlspecialchars($_SESSION['login']);
			}
			$infuser = getUser($login);
			$idclient= intval($infuser['id_client']);
		  $requser = allChatMsg($idclient);
			$info = Infoid($idclient);
			while($donnees=$requser->fetch()){
				?>
			 <div class="container">
				 <div class="row">
						 <div class="col-md-3">[<?=$donnees['datemsg'] ?>]</div>
						 <div class="col-md-2"><?=$donnees['login'] ?></div>
						 <div class="col-md-6"><?=$donnees['msg'] ?></div>
				 </div>
			 </div>
			 <?php
				}
			}
			else{
					header("location: connexion");
			}
?>
