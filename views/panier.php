<!DOCTYPE html>
<html>
<head>
<title>Votre panier</title>
</head>
<body>
<form method="post" action="panier">
<table style="width:800px">
	<tr>
		<td colspan="4">Votre panier</td>
	</tr>
	<tr>
		<td>Libellé</td>
		<td>Quantité</td>
		<td>Prix Unitaire</td>
		<td>Plateforme</td>
		<td>Action</td>
	</tr>
<?php
	if (creationPanier()) {
		$nb_jeu=count($_SESSION['panier']['id_jeu']);
		if ($nb_jeu <= 0){ ?>
		<tr><td>Votre panier est vide <br/><br/><a href="javascript:history.go(-1)"><input type="button" value="Retour"></a></td></tr>
		<?php } else{
			for ($i=0 ; $i < $nb_jeu ; $i++){ ?>
				 <tr>
				 <td><?= htmlspecialchars($_SESSION['panier']['nom_jeu'][$i]) ?></td>
				 <td><input type="text" size="4" name="q[]" value=<?=htmlspecialchars($_SESSION['panier']['qte_jeu'][$i])?>></td>
				 <td><?= htmlspecialchars($_SESSION['panier']['prix_jeu'][$i])?> €</td>
				 <td><?= htmlspecialchars($_SESSION['panier']['plateform_jeu'][$i])?></td>
				 <td><a href=<?=htmlspecialchars("panier?action=suppression&n=".rawurlencode($_SESSION['panier']['id_jeu'][$i]))?>><input type="button" value="X"></a></td>
				 </tr>
			 <?php } ?>
			<tr><td colspan="2"></td>
			<td colspan="2">
			Total : <?= MontantGlobal();?> €
			</td></tr>
			<tr><td colspan="4">
			<input type="submit" value="Rafraichir"/>
			<input type="hidden" name="action" value="refresh"/>
      <a href=<?=htmlspecialchars("panier?action=suppression_panier")?>><input type="button" value="Vider le panier"></a>
      <a href="javascript:history.go(-1)"><input type="button" value="Retour"></a>
			</td></tr>
      <tr><td colspan="4">
			<br>
	    <a href="achat"><input type="button" value="Valider le panier"></a>
			</td></tr>
			<?php	} } ?>
</table>
</form>
</body>
</html>
