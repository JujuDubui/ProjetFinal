<?php
if(isset($_SESSION['id_jeu']) OR isset($_POST['id'])){
if(!isset($_SESSION['nb_jeu'])) $_SESSION['nb_jeu']=0;
if(!empty($_SESSION['panier'])) $_SESSION['nb_jeu']=countjeu();
if(isset($_POST['id'])) $_SESSION['id_jeu'] = $_POST['id'];
if(isset($_SESSION['id_jeu'])) $_SESSION['id_jeu'] = $_SESSION['id_jeu'];
?>
<!DOCTYPE html>
<html>
		<head>
		<meta charset = "utf-8"/>
		<link rel="stylesheet" href="../css/style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<title></title>
		</head>
		<body>
			<?php include 'includes/menu.php'?>
			<?php include 'includes/footer.php' ?>
		</body>
</html>
<?php } ?>
