<?php
function db_connect() {
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=projetfinal;charset=utf8', 'root', '');
	}
	catch (Exception $e)
	{
	        die('Erreur : ' . $e->getMessage());
	}

	return $bdd;
}
?>
