<?php
if(!isset($_SESSION['nb_jeu'])) $_SESSION['nb_jeu']=0;
if(!empty($_SESSION['panier'])) $_SESSION['nb_jeu']=countjeu();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="../css/profil.css">
		<link rel="stylesheet" href="../css/style.css">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<title>Profil</title>
	</head>
	<body>
	<?php	include("includes/menu.php") ?>
		<div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Profil de <?=$userinfo['login'] ?></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class=" col-md-9 col-lg-9 ">
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Login:</td>
                        <td><?=$userinfo['login'] ?></td>
                      </tr>
                      <tr>
                        <td>Email:</td>
                        <td><?=$userinfo['mail'] ?></td>
                      </tr>
                      <tr>
                        <td>Adresse:</td>
                        <td><?=$userinfo['adress'] ?></td>
                      </tr>
                      <tr>
                        <td>Age :</td>
                        <td><?php
												$date_actuelle = new Datetime();
												$date_naiss = new Datetime($userinfo['datenaiss']);
												echo $date_actuelle->diff($date_naiss)->format('%Y ans');
												?></td>
                      </tr>
                    </tbody>
                  </table>
									<Button value="Edit" class="btn btn-sm btn-outline-secondary"><a href="modifmail">Editer Mail</a></Button>
									<Button value="Edit" class="btn btn-sm btn-outline-secondary"><a href="modifadress">Editer Adresse</a></Button>
									<Button value="Edit" class="btn btn-sm btn-outline-secondary"><a href="modifpassword">Editer Password</a></Button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
	</body>
</html>
