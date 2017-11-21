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
			<h1>Réclamation de la travailleuse enceinte ou qui allaite</h1>
		</div>
	</header>

	<section class="container">


		<ul class="nav nav-wizard">
			<li class="completed"><a href="#"><i>1</i></a></li>
			<li class="completed"><a href="#"><i>2</i></a></li>
			<li class="active"><a href="#"><i>3</i><span>Situation familiale</span></a></li>
			<li><a href="#"><i>4</i></a></li>
			<li><a href="#"><i>5</i></a></li>
		</ul>

		<div class="strong">
			<div class="mcl2">

				<div class="step-info">
					<p class="number">3</p>
					<h2>Situation familiale</h2>
				</div>

				<div class="form-cont sp-xl">

					<div class="content">
						


						<div class="box2">
							<h4>Situation familiale déclarée ​​​​​​​selon les lois sur l'impôt</h4>

							<div class="text">

								<label class="radiobutton required">
								   <i>Situation familiale</i>

								   <div class="radiobuttons">
									   	
										<label class="radiobutton">
										   <input data-show=".os-2-1" data-hide=".os-2" type="radio" name="mode4">
										   <i>Avec conjoint</i>

											<label class="radiobutton inline hide os-2 os-2-1 os-2-1a os-2-1b">
											   <i><span class="rft">*</span> Votre conjoint est-il à votre charge?</i>

											   <div class="radiobuttons">
												   	
													<label class="radiobutton">
													   <input type="radio" name="mode5" data-hide=".os-2a" data-show=".os-2-1a">
													   <i>Oui</i>
													</label>
												   	
													<label class="radiobutton">
													   <input type="radio" name="mode5" data-hide=".os-2a" data-show=".os-2-1b">
													   <i>Non</i>
													</label>

												</div>
											</label>

										</label>

										<label class="radiobutton">
										   <input data-hide=".os-2" data-show=".os-2-2" type="radio" name="mode4">
										   <i>Monoparentale</i>
										</label>

										<label class="radiobutton">
										   <input data-hide=".os-2" data-show=".os-2-3" type="radio" name="mode4">
										   <i>Célibataire</i>
										</label>
									
								   </div>

								</label>


								<div class="control-group os-2a os-2-1a os-2-1b os-2-2 os-2-3 os-2 hide">
									<label><span class="rft">*</span> Nombre de personnes mineures (-18 ans) à votre charge</label>
									<input type="text" class="amount" name="montant">
								</div>


								<div class="control-group os-2a os-2-1b os-2-2 os-2-3 os-2 hide">
									<label><span class="rft">*</span> Nombre de personnes majeures (18 ans et +) à votre charge​​​​​​​</label>
									<input type="text" class="amount" name="montant">
								</div>


								<div class="control-group os-2a os-2-1a os-2 hide">
									<label><span class="rft">*</span> Autre que votre conjoint, nombre de personnes majeures (18 ans et + à votre charge)</label>
									<input type="text" class="amount" name="montant">
								</div>


							</div>
						</div>
						
					</div>


					<div class="btns">
						<a class="btn btn7" href="2-renseignements-sur-votre-situation-professionnelle.html">Précédent</a>
						<a class="btn btn3" href="4-depot-direct.html">Suivant</a>
					</div>
				</div>

				<div class="btns">
					<a class="btn btn4a" href="#"><i class="icon-save"></i> Enregistrer en brouillon</a>
					<a class="btn btn4a" href="#"><i class="icon-delete"></i> Supprimer le brouillon</a>
				</div>

			</div>
		</div>

	</section>


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