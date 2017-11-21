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
			    				<p>Retour à Mon espace travailleur</p>
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
			<h1>Réclamation du travailleur</h1>
		</div>
	</header>

	<section class="container">

		<ul class="nav nav-wizard">
			<li class="completed"><a href="#"><i>1</i></a></li>
			<li class="completed"><a href="#"><i>2</i></a></li>
			<li class="completed"><a href="#"><i>3</i></a></li>
			<li class="completed"><a href="#"><i>4</i></a></li>
			<li class="completed"><a href="#"><i>5</i></a></li>
			<li class="active"><a href="#"><i>6</i><span>Transmettre des documents</span></a></li>
			<li><a href="#"><i>7</i></a></li>
			<li><a href="#"><i>8</i></a></li>
		</ul>

		<div class="strong">
			<div class="mcl2">

				<div class="step-info">
					<p class="number">6</p>
					<h2>Transmettre des documents</h2>
				</div>

				<div class="form-cont sp-xl">

					<div class="content">
						<div class="text sp-s">
							<p><span class="rft">*</span> Obligatoire</p>
						</div>

						<div class="box2">

							<div class="text">

								<label class="radiobutton required inline">
								   <i>Avez-vous des documents à nous transmettre?</i>
								   <p class="clarification">(Prescriptions, compléments d'information)</p>
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



							</div>


							<div class="hide os-1-1 os-1">
								<div class="multiblocks">
									<div class="sub-block">
										<div class="header">
											<a class="btn4a btn-delete" href="#"><i class="icon-delete2"></i><span>Supprimer</span></a>
											<h4>Document numéro <span class="number">1</span></h4>
										</div>
										<div class="sub-cont">

											<label class="radiobutton required">
											   <i>Type de document</i>
											   <p class="clarification"></p>
											   <div class="radiobuttons">
												   	
													<label class="radiobutton">
													   <input type="radio" name="mode">
													   <i>Prescriptions</i>
													</label>

													<label class="radiobutton">
													   <input type="radio" name="mode">
													   <i>Compléments d'informations</i>
													</label>
												
											   </div>

											</label>

											<div class="control-group">
												<label>Description du document</label>
												<textarea></textarea>
											</div>

											<div class="control-group">
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
									<a href="#" class="btn4 btn-add"><i class="icon-add"></i><span>Ajouter un document</span></a>
								</div>
							</div>


						</div>


					</div>	
					<div class="btns">
						<a class="btn btn7" href="6-depot-direct.html">Précédent</a>
						<a class="btn btn3" href="7-autorisation.html">Suivant</a>
					</div>
				</div>

				<div class="btns">
					<a class="btn btn4a" href="#"><i class="icon-save"></i> Enregistrer en brouillon</a>
					<a class="btn btn4a" href="#"><i class="icon-delete"></i> Supprimer le brouillon</a>
				</div>

			</div>
		</div>

	</section>

	<div class="block-example hide">
		<div class="sub-block">
			<div class="header">
				<a class="btn4a btn-delete" href="#"><i class="icon-delete2"></i><span>Supprimer</span></a>
				<h4>Document numéro <span class="number">1</span></h4>
			</div>
			<div class="sub-cont">

				<label class="radiobutton required">
				   <i>Type de document</i>
				   <p class="clarification"></p>
				   <div class="radiobuttons">
					   	
						<label class="radiobutton">
						   <input type="radio" name="mode">
						   <i>Prescriptions</i>
						</label>

						<label class="radiobutton">
						   <input type="radio" name="mode">
						   <i>Compléments d'informations</i>
						</label>
					
				   </div>

				</label>

				<div class="control-group">
					<label>Description du document</label>
					<textarea></textarea>
				</div>

				<div class="control-group">
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