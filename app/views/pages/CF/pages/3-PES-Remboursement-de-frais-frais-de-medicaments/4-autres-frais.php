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
			<li class="completed"><a href="#"><i>2</i></a></li>
			<li class="completed"><a href="#"><i>3</i></a></li>
			<li class="active"><a href="#"><i>4</i><span>Autres frais</span></a></li>
			<li><a href="#"><i>5</i></a></li>
		</ul>

		<div class="strong">
			<div class="mcl2">

				<div class="step-info">
					<p class="number">4</p>
					<h2>Autres frais</h2>
				</div>

				<div class="form-cont sp-xl">

					<div class="content">

						<div class="text sp-s">
							<p><span class="rft">*</span> Obligatoire</p>
						</div>


						<div class="box2">

							<div class="text">

								<label class="radiobutton required inline">
								   <i>Avez-vous d'autres frais (produits ou services) à vous faire rembourser</i>
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
									<p class="note"><strong>Note:</strong> Les autres frais ne doivent pas etre des frais de médicaments, de vêtements, de déplacements, d'hébergement ou de repas. Ces frais doivent etre regroupés par reçu.</p>
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
														<h4>Frais <span class="number">1</span></h4>
													</div>
													<div class="sub-cont">

														<div class="control-group">
															<label><span class="rft">*</span> Description du produit ou service</label>
															<input type="text" name="a">
														</div>

														<div class="control-group">
															<label><span class="rft">*</span> Fournisseur du produit ou du service</label>
															<input type="text" name="a">
														</div>

														<div class="control-group">
															<label><span class="rft">*</span> Montant (avant taxes)</label>
															<input type="text" name="a" class="amount"> $
														</div>

													</div>

												</div>

											</div>

											<div class="btns3">
												<a href="#" class="btn4 btn-add" data-block=".block-frais"><i class="icon-add"></i><span>Ajouter un frais</span></a>
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


											<label class="radiobutton required inline sp-s">
												<p><strong>Ordonnance médicale</strong></p><br>
											   	<i>Avez-vous reçu une ordonnance médicale pour ce frais?</i>
												<div class="radiobuttons">

													<label class="radiobutton">
														<input  data-show=".os-8-1" data-hide=".os-8" type="radio" name="mode8">
														<i>Oui</i>
													</label>

													<label class="radiobutton">
														<input data-hide=".os-8" type="radio" name="mode8">
														<i>Non</i>
													</label>

												</div>

											</label>


											<label class="radiobutton required inline hide os-8 os-8-1">
											   <i>Avez-vous déjà faire parvenir cette ordonnance médicale à la CNESST?</i>
											   <div class="radiobuttons">
												   	
													<label class="radiobutton">
													   <input data-hide=".os-7" type="radio" name="mod7">
													   <i>Oui</i>
													</label>

													<label class="radiobutton">
													   <input data-show=".os-7-1" data-hide=".os-7" type="radio" name="mod7">
													   <i>Non</i>
													</label>
												
											   </div>

											</label>


											<div class="control-group hide os-7 os-7-1">
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
						<a class="btn btn7" href="3-vetements.html">Précédent</a>
						<a class="btn btn3" href="5-resume.html">Suivant</a>
					</div>
				</div>

				<div class="btns">
					<a class="btn btn4a" href="#"><i class="icon-save"></i> Enregistrer en brouillon</a>
					<a class="btn btn4a" href="#"><i class="icon-delete"></i> Supprimer le brouillon</a>
				</div>

			</div>
		</div>

	</section>

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
							<h4>Frais <span class="number">1</span></h4>
						</div>
						<div class="sub-cont">

							<div class="control-group">
								<label><span class="rft">*</span> Description du produit ou service</label>
								<input type="text" name="a">
							</div>

							<div class="control-group">
								<label><span class="rft">*</span> Fournisseur du produit ou du service</label>
								<input type="text" name="a">
							</div>

							<div class="control-group">
								<label><span class="rft">*</span> Montant (avant taxes)</label>
								<input type="text" name="a" class="amount"> $
							</div>

						</div>

					</div>

				</div>

				<div class="btns3">
					<a href="#" class="btn4 btn-add" data-block=".block-frais"><i class="icon-add"></i><span>Ajouter un frais</span></a>
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


				<label class="radiobutton required inline sp-s">
					<p><strong>Ordonnance médicale</strong></p>
				   <i>Avez-vous reçu une ordonnance médicale pour ce frais?</i>
				   <div class="radiobuttons">
					   	
						<label class="radiobutton">
						   <input  data-show=".os-_N_-8-1" data-hide=".os-_N_-8" type="radio" name="mode8-_N_">
						   <i>Oui</i>
						</label>

						<label class="radiobutton">
						   <input data-hide=".os-_N_-8" type="radio" name="mode8-_N_">
						   <i>Non</i>
						</label>
					
				   </div>

				</label>


				<label class="radiobutton required inline hide os-_N_-8 os-_N_-8-1">
				   <i>Avez-vous déjà faire parvenir cette ordonnance médicale à la CNESST?</i>
				   <div class="radiobuttons">
					   	
						<label class="radiobutton">
						   <input data-hide=".os-_N_-7" type="radio" name="mod7-_N_">
						   <i>Oui</i>
						</label>

						<label class="radiobutton">
						   <input data-show=".os-_N_-7-1" data-hide=".os-_N_-7" type="radio" name="mod7-_N_">
						   <i>Non</i>
						</label>
					
				   </div>

				</label>


				<div class="control-group hide os-_N_-7 os-_N_-7-1">
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

			</div>	
		</div>

	</div>

	<div class="block-frais hide">
		<div class="sub-block">
			<div class="header">
				<a class="btn4a btn-delete" href="#"><i class="icon-delete2"></i><span>Supprimer</span></a>
				<h4>Frais <span class="number">1</span></h4>
			</div>
			<div class="sub-cont">

				<div class="control-group">
					<label><span class="rft">*</span> Description du produit ou service</label>
					<input type="text" name="a">
				</div>

				<div class="control-group">
					<label><span class="rft">*</span> Fournisseur du produit ou du service</label>
					<input type="text" name="a">
				</div>

				<div class="control-group">
					<label><span class="rft">*</span> Montant (avant taxes)</label>
					<input type="text" name="a" class="amount"> $
				</div>

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