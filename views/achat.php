<!DOCTYPE html>
<html>
<head>
<title>Validation de l'achat</title>
</head>
<body>
<form method="post" action="panier">
<table style="width:800px">
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
		if ($nb_jeu <= 0)
		header("Location: panier");
		else
		{
			for ($i=0 ;$i < $nb_jeu ; $i++)
			{
				 echo "<tr>";
				 echo "<td>".htmlspecialchars($_SESSION['panier']['nom_jeu'][$i])."</td>";
				 echo "<td>".htmlspecialchars($_SESSION['panier']['qte_jeu'][$i])."</td>";
				 echo "<td>".htmlspecialchars($_SESSION['panier']['prix_jeu'][$i])."</td>";
				 echo "<td>".htmlspecialchars($_SESSION['panier']['plateform_jeu'][$i])."</td>";
				 echo "</tr>";
			}
			echo "<tr><td colspan=\"2\"></td>";
			echo "<td colspan=\"2\">";
			echo "Total : ".MontantGlobal();
			echo "</td></tr>";
			echo "<tr><td colspan=\"4\">";
      echo "<a href=\"panier\"><input type=\"button\" value=\"Retour\"></a>";
      echo "<a href=\"achat\"><input type=\"button\" value=\"Acheter\"></a>";
			echo "</td></tr>";
      echo "<tr><td colspan=\"4\">";

		}
	}
	?>
</table>
</form>
</body>
</html>
