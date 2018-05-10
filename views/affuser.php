<?php
	if(isset($_SESSION['login_admin']) && !empty($_SESSION['login_admin'])){
	   $requser = allUserInfo();
     while($donnees=$requser->fetch()){
       ?>
  <div class="container">
    <div class="row">
          <div class="col-md-1"><div align="center"><?=$donnees['id_client'] ?></div></div>
          <div class="col-md-2">
						<div align="center">
							<form action="helpadmin" method="post">
								<input type="hidden" id="login" name="login" value=<?=$donnees['login']?>>
								<input type="submit" value=<?=$donnees['login']?>>
							</form>
						</div>
					</div>
					<div class="col-md-5"><div align="center"><?=$donnees['passw'] ?></div></div>
					<?php if($donnees['Statut']==1){?>
          <div class="col-md-2"><div align="center">En Ligne</div></div>
					<?php } else{ ?>
					<div class="col-md-2"><div align="center">Hors Ligne</div></div>
					<?php } ?>
          <div class="col-md-2"><div align="center">
            <form action="deluser" method="get">
                <input type="hidden" name="id" value=<?=$donnees['id_client']?>>
                <input value="Supprimer" type="submit"/>
             </form>
          </div></div>
      </div>
    </div>
<?php
} $requser->closeCursor();
	}
	else{
		header("location: connexion");
	}
?>
