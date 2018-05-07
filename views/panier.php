<!DOCTYPE html>
<html>
<head>
<title>Votre panier</title>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="../css/panier.css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
	<div class="container">
		<form method="post" action="panier">
			<table id="cart" class="table table-hover table-condensed">
			<thead>
				<tr>
					<th style="width:50%">Libellé</th>
					<th style="width:10%">Prix</th>
					<th style="width:8%">Quantité</th>
					<th style="width:10%">Plateforme</th>
					<th style="width:10%">Action</th>
				</tr>
			</thead>
			<tbody>
			<?php
				if (creationPanier()) {
					$nb_jeu=count($_SESSION['panier']['id_jeu']);
					if ($nb_jeu <= 0){ ?>
					<tr><td>Votre panier est vide <br/><br/><a href="javascript:history.go(-1)"><input type="button" value="Retour"></a></td></tr>
					<?php } else{
						for ($i=0 ; $i < $nb_jeu ; $i++){ ?>
							 <tr>
							 <td><?= htmlspecialchars($_SESSION['panier']['nom_jeu'][$i]) ?></td>
							 <td data-th="Price"><?= htmlspecialchars($_SESSION['panier']['prix_jeu'][$i])?> €</td>
							 <td data-th="Quantity"><input type="text" size="4" name="q[]" value=<?=htmlspecialchars($_SESSION['panier']['qte_jeu'][$i])?>></td>
							 <td><?= htmlspecialchars($_SESSION['panier']['plateform_jeu'][$i])?></td>
							 <td><button class="btn btn-danger btn-sm"><a class="fa fa-trash-o" href=<?=htmlspecialchars("panier?action=suppression&n=".rawurlencode($_SESSION['panier']['id_jeu'][$i]))?>></a></button></td>
							 </tr>
						 <?php } ?>
					 </tbody>
					<tfoot>
					 <tr>
						 <td><a href="boutique" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
						 <td colspan="2" class="hidden-xs"></td>
						 <td class="hidden-xs text-center"><strong>Total :<?= MontantGlobal();?>€</strong></td>
						 <td><a href="achat" class="btn btn-success btn-block">Checkout <i type="submit" class="fa fa-angle-right"></i></a></td>
					 </tr>
				 </tfoot>
						<tr class="visible-xs">
							<td class="text-center"><strong></strong></td>
						</tr>
						<tr><td colspan="4">
						<input type="submit" value="Rafraichir"/>
						<input type="hidden" name="action" value="refresh"/>
			      <a href=<?=htmlspecialchars("panier?action=suppression_panier")?>><input type="button" value="Vider le panier"></a>
						</td></tr>

						<?php	} } ?>
				</table>
		</form>
	</div>
</body>
</html>
