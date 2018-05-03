<!DOCTYPE html>
	<html>
		<head>
			<meta charset = "utf-8"/>
			<title>Help</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  		<link rel="stylesheet" href="../CSS/style2.css">
			<script type="text/javascript" src="../js/main.js"></script>
  		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		</head>
		<body>
      <div class="container">
        <div align="center">
           <form action="addmsg" method="post">
             Votre login sur le tchat est <input type="hidden" name="login" value=<?=$_SESSION['login']?>>
             <?= $_SESSION['login'] ?>
             <br><br>
             <textarea name="msg"></textarea>
             <br><br>
             <input type="submit" name="envoyer" value="Envoyer"/>
             <a href="accueil"><input type="button" name ="retour" value="Retour"></a>
           <form>
						 <?php if($info['Statut']==1){ ?>
						 <br><br>
						 <p>Administrateur en Ligne</p>
					 <?php } else{?>
						 <br><br>
						 <p>Administrateur Hors Ligne, pour le contacter veuillez envoyer un mail</p>
					 <?php } ?>
        </div>
      </div>
		</body>
</html>
