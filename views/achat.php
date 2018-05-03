<!DOCTYPE html>
<html>
<head>
<title>Validation de l'achat</title>
</head>
<body>
<form method="post">
<table style="width:700px">
	<tr>
		<td colspan="4">Votre commande</td>
	</tr>
	<tr>
		<td>Libellé</td>
		<td>Quantité</td>
		<td>Prix Unitaire</td>
		<td>Plateforme</td>
	</tr>
<?php
	if (creationPanier())
	{
		$nb_jeu=count($_SESSION['panier']['id_jeu']);
		if ($nb_jeu > 0){
			for ($i=0 ;$i < $nb_jeu ; $i++)
			{
			?>
				 <tr>
				 <td><?= htmlspecialchars($_SESSION['panier']['nom_jeu'][$i]) ?></td>
				 <td><?= htmlspecialchars($_SESSION['panier']['qte_jeu'][$i]) ?></td>
				 <td><?= htmlspecialchars($_SESSION['panier']['prix_jeu'][$i]) ?></td>
				 <td><?= htmlspecialchars($_SESSION['panier']['plateform_jeu'][$i]) ?></td>
				 </tr>
			<?php } ?>
			<tr><td colspan="2"></td>
			<td colspan="2">
			Total : <?= MontantGlobal(); ?>
			</td></tr>
			<tr><td colspan="4">
			<br><label for="password">Confirmation : </label>
			<input type="password" name="password">
      <br><br><a href="panier"><input type="button" value="Retour"></a>
      <input type="submit" value="Acheter">
			</td></tr>
      <tr><td colspan="4">
			<?php
					if(isset($errorMessage)){
							echo '<font color="red">'.$errorMessage.'</font>';
					}
		}
	}
	?>
</table>
</form>
</body>
</html>
