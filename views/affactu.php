<h2 align="center">Actualité <?=$_SESSION['plateform']?></h2>
<div class="album py-5 bg-light">
	<div class="container">
		<div class="row">
				<?php
				if(isset($_POST['plateform'])){
					$_SESSION['plateform'] = $_POST['plateform'];
				}
				$requser = InfoGameplat($_SESSION['plateform']);
				while($donnees=$requser->fetch()){
				?>
								<div class="col-md-4">
									<div class="card mb-4 box-shadow">
										<?php $repertoire = 'images/img_jeu/'; ?>
										<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="<?=$donnees['nom']?>" src="<?=$repertoire.$donnees['jacket']?>">
										<div class="card-body">
											<div class="d-flex justify-content-between align-items-center">
												<div class="btn-group">
													<button type="button" class="btn btn-sm btn-outline-secondary"><?=$donnees['plateform']?>
													<button type="button" class="btn btn-sm btn-outline-secondary">Pegi <?=$donnees['pegi']?></button>
													<form action="#" method="get">
															<input type="hidden" name="id" value=<?=$donnees['id_jeu']?>>
															<input value="Détails" type="submit">
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
						<?php }?>
				</div>
		</div>
</div>
