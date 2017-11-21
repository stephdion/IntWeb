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
			<h1>ÉVOLUTION DE LA SITUATION MÉDICALE</h1>
		</div>
	</header>

	<section class="container">

		<ul class="nav nav-wizard">
			<li class="completed"><a href="#"><i>1</i></a></li>
			<li class="completed"><a href="#"><i>2</i></a></li>
			<li class="completed"><a href="#"><i>3</i></a></li>
			<li class="active"><a href="#"><i>4</i><span>Examens médicaux</span></a></li>
			<li><a href="#"><i>5</i></a></li>
			<li><a href="#"><i>6</i></a></li>
			<li><a href="#"><i>7</i></a></li>
			<li><a href="#"><i>8</i></a></li>
		</ul>

		<div class="strong">
			<div class="mcl2">

				<div class="step-info">
					<p class="number">4</p>
					<h2>Examens médicaux</h2>
				</div>

				<div class="form-cont sp-xl">

					<div class="content">

						<div class="text sp-s">
							<p><span class="rft">*</span> Obligatoire</p>
						</div>


						<div class="box2">
							<h4>Examens</h4>

							<div class="text">

								<label class="radiobutton required inline">
								   <i>Depuis votre dernière visite médicale, votre médecin vous a-t-il prescrit des examens?</i>
								   <div class="radiobuttons">
									   	
										<label class="radiobutton">
										   <input data-show=".os-1-1" data-hide=".os-1" type="radio" name="mode2">
										   <i>Oui</i>
										</label>

										<label class="radiobutton">
										   <input data-hide=".os-1" type="radio" name="mode2">
										   <i>Non</i>
										</label>
									
								   </div>

								</label>

							</div>


							<div class="hide os-1-1 os-1">
								<div class="multiblocks">
									<div class="sub-block">
										<div class="header">
											<h4>Examen numéro <span class="number">1</span></h4>
										</div>
										<div class="sub-cont">

											<div class="control-group">
												<label>Type d'examen </label>
												<input type="text" name="nom" value="">
											</div>

											<div class="control-group">
												<label>Date prévue de l'examen</label>
												<div class="date-icon">
													<input type="text" name="date1" class="datepicker form-control" value="">
												</div>
											</div>

											<div class="control-group">
												<label>Nom de l'établissement de santé</label>
												<input type="text" name="nom" value="">
											</div>

										</div>	
									</div>
								</div>

								<div class="btns3">
									<a href="#" class="btn4 btn-add" data-block=".block-examen"><i class="icon-add"></i><span>Ajouter un examen</span></a>
								</div>
							</div>
						</div>


					</div>	
					<div class="btns">
						<a class="btn btn7" href="3-les-rapports-medicaux.html">Précédent</a>
						<a class="btn btn3" href="5-les-traitements.html">Suivant</a>
					</div>
				</div>

				<div class="btns">
					<a class="btn btn4a" href="#"><i class="icon-save"></i> Enregistrer en brouillon</a>
					<a class="btn btn4a" href="#"><i class="icon-delete"></i> Supprimer le brouillon</a>
				</div>

			</div>
		</div>

	</section>


	<div class="block-examen hide">
		<div class="sub-block">
			<div class="header">
				<a class="btn4a btn-delete" href="#"><i class="icon-delete2"></i><span>Supprimer</span></a>
				<h4>Examen numéro <span class="number">1</span></h4>
			</div>
			<div class="sub-cont">

				<div class="control-group">
					<label>Type d'examen </label>
					<input type="text" name="nom" value="">
				</div>

				<div class="control-group">
					<label>Date prévue de l'examen</label>
					<div class="date-icon">
						<input type="text" name="date1-_N_" class="datepicker form-control" value="">
					</div>
				</div>

				<div class="control-group">
					<label>Nom de l'établissement de santé</label>
					<input type="text" name="nom" value="">
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