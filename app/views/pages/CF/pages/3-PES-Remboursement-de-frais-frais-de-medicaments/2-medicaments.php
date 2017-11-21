<?php include('../../header.php'); ?>

	<header class="container header-v1">
		<div class="row no-gutters">
			<div class="col-auto">
				<figure class="logo">
					<img src="../../images/logo.png">
				</figure>
			</div>
		    <div class="col align-self-end">
		    	<nav class="top-menu">
		    		<ul>
		    			<li>
			    			<a href="#">
			    				<img src="../../images/icone-cnesst-icone-fleche-retour.png">
			    				<p>Retour à PES</p>
			    			</a>
		    			</li>
		    			<li>
			    			<a href="#">
			    				<img src="../../images/icone-cnesst-icone-connexion.png">
			    				<p>Me déconnecter</p>
			    			</a>
		    			</li>
		    		</ul>
		    	</nav>
		    </div>
		</div>
		<div class="no-menu">
			<h1>Remboursement de frais - Hébergement/Repas</h1>
		</div>
	</header>

	<section class="container">

		<ul class="nav nav-wizard">
			<li class="completed"><a href="#"><i>1</i></a></li>
			<li class="active"><a href="#"><i>2</i><span>Médicaments</span></a></li>
			<li><a href="#"><i>3</i></a></li>
			<li><a href="#"><i>4</i></a></li>
			<li><a href="#"><i>5</i></a></li>
		</ul>

		<div class="strong">
			<div class="mcl2">

				<div class="step-info">
					<p class="number">2</p>
					<h2>Médicaments</h2>
				</div>

				<div class="form-cont sp-xl">

					<div class="content">

						<div class="text sp-s">
							<p><span class="rft">*</span> Obligatoire</p>
						</div>


						<div class="box2">

							<div class="text">

								<label class="radiobutton required inline">
								   <i>Avez-vous des frais de médicaments?</i>
								   <div class="radiobuttons">
									   	
										<label class="radiobutton">
										   <input data-show=".os-1-1" data-hide=".os-1" type="radio" name="mode">
										   <i>Oui</i>
										</label>

										<label class="radiobutton">
										   <input data-hide=".os-1" type="radio" name="mode">
										   <i>Non</i>
										</label>
									
								   </div>

								</label>


								<div class="os-1-1 os-1 hide">
									<p class="note"><strong>Note:</strong> Copie le reçu précédent modifiable.</p>
								</div>

							</div>


							<div class="hide os-1-1 os-1">
								<div class="multiblocks">
									<div class="sub-block">
										<div class="header">
											<h4><span class="number">1</span> - Reçu du <div class="date-icon"><input type="text" class="datepicker form-control" value=""></div></h4>
										</div>
										<div class="sub-cont">

											<div class="multiblocks">
												<div class="sub-block">

													<div class="header">
														<h4>Médicament <span class="number">1</span></h4>
													</div>
													<div class="sub-cont">

														<div class="control-group">
															<label><span class="rft">*</span> Nom du médicament</label>
															<input type="text" name="a">
														</div>

														<div class="control-group">
															<label><span class="rft">*</span> Montant</label>
															<input type="text" name="a" class="amount"> $
														</div>


														<div class="control-group">
															<label><span class="rft">*</span> Nom du médecin</label>
															<input type="text" name="a">
														</div>

													</div>

												</div>

											</div>

											<div class="btns3">
												<a href="#" class="btn4 btn-add" data-block=".block-medicament"><i class="icon-add"></i><span>Ajouter un médicament</span></a>
											</div>

											<div class="control-group">
												<label>Copie du reçu</label>
												<p class="clarification"><span class="rft">*</span>Veuillez joindre une copie du reçu. (Document PDF, image, photo ou autre)</p>
												<br>
												<div class="file">
													<label class="file-btn"><i class="icon-attach"></i><span>Parcourir</span></label>
													<input type="file" name="file">
													<a href="#" class="btn-remove"><i class="icon-remove"></i></a>
													<div class="detail"><i class="icon-file"></i><span></span></div>
												</div>
											</div>


											<label class="radiobutton required sp-xl">
											   <i>Autre reçu de médicaments</i>
											   <div class="radiobuttons">
												   	
													<label class="radiobutton">
													   <input data-show=".os-9-1" data-hide=".os-9" type="radio" name="mode">
													   <i>Similaire au précedent</i>
													</label>

													<div class="os-9-1 os-9 hide sp-s">
														<p class="note"><strong>Note:</strong> Copie le reçu précédent modifiable.</p>
													</div>

													<label class="radiobutton">
													   <input data-hide=".os-9" type="radio" name="mode">
													   <i>Différent du précédent</i>
													</label>
												
											   </div>

											</label>




										</div>	
									</div>
								</div>

								<div class="btns3">
									<a href="#" class="btn4 btn-add" data-block=".block-recu"><i class="icon-add"></i><span>Ajouter un reçu</span></a>
								</div>
							</div>


						</div>


					</div>	
					<div class="btns">
						<a class="btn btn7" href="1-identification.html">Précédent</a>
						<a class="btn btn3" href="3-vetements.html">Suivant</a>
					</div>
				</div>

				<div class="btns">
					<a class="btn btn4a" href="#"><i class="icon-save"></i> Enregistrer en brouillon</a>
					<a class="btn btn4a" href="#"><i class="icon-delete"></i> Supprimer le brouillon</a>
				</div>

			</div>
		</div>

	</section>


	<div class="block-medicament hide">

		<div class="sub-block">
			<div class="header">
				<a class="btn4a btn-delete" href="#"><i class="icon-delete2"></i><span>Supprimer</span></a>
				<h4>Médicament <span class="number">1</span> </h4>
			</div>
			<div class="sub-cont">

				<div class="control-group">
					<label><span class="rft">*</span> Nom du médicament</label>
					<input type="text" name="a">
				</div>

				<div class="control-group">
					<label><span class="rft">*</span> Montant</label>
					<input type="text" name="a" class="amount"> $
				</div>


				<div class="control-group">
					<label><span class="rft">*</span> Nom du médecin</label>
					<input type="text" name="a">
				</div>

			</div>
		</div>

	</div>

	<div class="block-recu hide">

		<div class="sub-block">
			<div class="header">
				<a class="btn4a btn-delete" href="#"><i class="icon-delete2"></i><span>Supprimer</span></a>
				<h4><span class="number">1</span> - Reçu du <div class="date-icon"><input type="text" class="datepicker form-control" value=""></div></h4>
			</div>
			<div class="sub-cont">

				<div class="multiblocks">
					<div class="sub-block">

						<div class="header">
							<h4>Medicament <span class="number">1</span></h4>
						</div>
						<div class="sub-cont">

							<div class="control-group">
								<label><span class="rft">*</span> Nom du médicament</label>
								<input type="text" name="a">
							</div>

							<div class="control-group">
								<label><span class="rft">*</span> Montant</label>
								<input type="text" name="a" class="amount"> $
							</div>


							<div class="control-group">
								<label><span class="rft">*</span> Nom du médicin</label>
								<input type="text" name="a" class="amount"> $
							</div>

						</div>

					</div>

				</div>

				<div class="btns3">
					<a href="#" class="btn4 btn-add" data-block=".block-medicament"><i class="icon-add"></i><span>Ajouter un médicament</span></a>
				</div>

				<div class="control-group">
					<label>Copie du reçu</label>
					<p class="clarification"><span class="rft">*</span>Veuillez joindre une copie du reçu.</p>
					<br>
					<div class="file">
						<label class="file-btn"><i class="icon-attach"></i><span>Parcourir</span></label>
						<input type="file" name="file">
						<a href="#" class="btn-remove"><i class="icon-remove"></i></a>
						<div class="detail"><i class="icon-file"></i><span></span></div>
					</div>
				</div>


				<label class="radiobutton required sp-xl">
				   <i>Autre reçu de médicaments</i>
				   <div class="radiobuttons">
					   	
						<label class="radiobutton">
						   <input data-show=".os-9-1" data-hide=".os-9" type="radio" name="mode">
						   <i>Similaire au précedent</i>
						</label>

						<div class="os-9-1 os-9 hide sp-s">
							<p class="note"><strong>Note:</strong> Copie le reçu précédent modifiable.</p>
						</div>

						<label class="radiobutton">
						   <input data-hide=".os-9" type="radio" name="mode">
						   <i>Différent du précédent</i>
						</label>
					
				   </div>

				</label>

			</div>
		</div>

	</div>

	<footer class="container footer">
		<div class="row no-gutters">
			<div class="col">
				<ul class="footer-menu">
					<li><a href="#">Accessibilité</a></li>
					<li><a href="#">Politique de confidentialité</a></li>
					<li><a href="#">Plan du site</a></li>
				</ul>
			</div>
			<div class="col right">
				<span>Renseignements généraux : </span>
				<span><a href="tel:18448380808">1 844 838-0808</a></span>
				<img src="../../images/logo_footer.png">
			</div>
		</div>
		<div class="row no-gutters bottom">
			&copy; CNESST, 2017
		</div>

	</footer>



<?php include('../../footer.php'); ?>