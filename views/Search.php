<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Recherche</title>
  </head>
  <body>
    <form method="POST" action="Search" class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" name="search" placeholder="Recherche" aria-label="Search">
        <input class="btn btn-outline-success my-2 my-sm-0" value="Rechercher" type="submit">
    </form>
    <?php if(!empty($_POST['search'])){ ?>
    <div class="album py-5 bg-light">
    				<div class="container">
    					<div class="row">
    						<?php
    						$requser = searchjeu($_POST['search']);
    						while($donnees=$requser->fetch()){
    						?>
    								<div class="col-md-4">
    									<div class="card mb-4 box-shadow">
    										<?php $repertoire = 'images/img_jeu/'; ?>
    										<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="<?=$donnees['nom']?>" src="<?=$repertoire.$donnees['jacket']?>">
    										<div class="card-body">
    											<div class="d-flex justify-content-between align-items-center">
    												<div class="btn-group">
    													<button type="button" class="btn btn-sm btn-outline-secondary"><?=$donnees['plateform']?></button>
    													<form action="fiche" method="post">
    															<input type="hidden" name="id" value=<?=$donnees['id_jeu']?>>
    															<input value="Détails" class="btn btn-sm btn-outline-secondary" type="submit">
    													</form>
    												</div>
    											</div>
    										</div>
    									</div>
    								</div>
              <?php } ?>
    				</div>
    		</div>
    	</div>
    <?php } ?>
  </body>
</html>
