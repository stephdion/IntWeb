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
			<li class="completed"><a href="#"><i>4</i></a></li>
			<li class="completed"><a href="#"><i>5</i></a></li>
			<li class="completed"><a href="#"><i>6</i></a></li>
			<li class="active"><a href="#"><i>7</i><span>Capacité à travailler</span></a></li>
			<li><a href="#"><i>8</i></a></li>
		</ul>

		<div class="strong">
			<div class="mcl2">

				<div class="step-info">
					<p class="number">7</p>
					<h2>Capacité à travailler</h2>
				</div>

				<div class="form-cont sp-xl">

					<div class="content">

						<div class="text sp-s">
							<p><span class="rft">*</span> Obligatoire</p>
						</div>


						<div class="box2">
							<h4>Information sur votre capacité à travailler</h4>

							<div class="text">

								<label class="radiobutton required">
								   <i>Quelle situation s'applique à vous?</i>
								   <div class="radiobuttons">
									   	
										<label class="radiobutton">
										   <input data-hide=".os-1" data-show=".os-1-1" type="radio" name="mode2">
										   <i>Je suis de retour au travail </i>
										</label>

										<label class="radiobutton">
										   <input data-hide=".os-1" data-show=".os-1-1" type="radio" name="mode2">
										   <i>Je connais ma date de retour au travail</i>
										</label>

										<label class="radiobutton">
										   <input data-hide=".os-1" data-show=".os-1-3" type="radio" name="mode2">
										   <i>Je ne suis pas de retour au travail</i>
										</label>

										<label class="radiobutton">
										   <input data-hide=".os-1" data-show=".os-1-4" type="radio" name="mode2">
										   <i>Je suis de nouveau en arrêt de travail</i>
										</label>

										<label class="radiobutton">
										   <input data-hide=".os-1" data-show=".os-1-5" type="radio" name="mode2">
										   <i>Autre situation</i>
										</label>
									
								   </div>

								</label>

							</div>

						</div>


						<div class="box2 hide os-1 os-1-1">
							<h4>Retour au travail</h4>

							<div class="text">

								<div class="control-group">
									<label>Date prévue de votre retour au travail</label>
									<div class="date-icon">
										<input type="text" name="date1" class="datepicker form-control" value="">
									</div>
								</div>


								<label class="radiobutton required">
								   <i>Précisez votre emploi</i>
								   <div class="radiobuttons">
									   	
										<label class="radiobutton">
										   <input data-hide=".os-2" data-show=".os-2-1" type="radio" name="mode3">
										   <i>Travail régulier (mêmes tâches, même horaire, mêmes conditions)</i>
										</label>

										<label class="radiobutton">
										   <input data-hide=".os-2" data-show=".os-2-1" type="radio" name="mode3">
										   <i>Assignation temporaire </i>
										</label>

										<label class="radiobutton">
										   <input data-hide=".os-2" data-show=".os-2-3" type="radio" name="mode3">
										   <i>Travail allégé ou retour progressif</i>
										</label>
									
								   </div>


								   <div class="hide sp-s os-2 os-2-3">
										<div class="control-group">
								   			<label>Précisez</label>
								   		</div>
										<div class="control-group">
											<label><span class="rft">*</span> Nombre d'heures travaillées par jour</label>
											<input type="text" name="nm" class="amount" value="">
										</div>
										<div class="control-group">
											<label><span class="rft">*</span> Nombre de jours travaillés par semaine</label>
											<input type="text" name="nm" class="amount" value="">
										</div>


										<label class="radiobutton required inline">
										   <i>Précisez votre emploi</i>
										   <div class="radiobuttons">
											   	
												<label class="radiobutton">
												   <input type="radio" name="mode4">
												   <i>Oui</i>
												</label>

												<label class="radiobutton">
												   <input type="radio" name="mode4">
												   <i>Non</i>
												</label>

												<label class="radiobutton">
												   <input type="radio" name="mode4">
												   <i>Je ne sais pas</i>
												</label>
											
										   </div>
										</label>



								   </div>

								</label>

							</div>

						</div>


						<div class="box2 hide os-1 os-1-4">
							<h4>Arrêt de travail</h4>

							<div class="text">

								<label class="radiobutton required">
								   <i>Veuillez sélectionner la situation qui s'applique à vous</i>
								   <div class="radiobuttons">
									   	
										<label class="radiobutton">
										   <input data-hide=".os-3" type="radio" name="mode5">
										   <i>Arrêt de travail à la suite d'une lésion professionnelle</i>
										</label>

										<label class="radiobutton">
										   <input data-hide=".os-3" type="radio" name="mode5">
										   <i>Assignation de travail non disponible</i>
										</label>

										<label class="radiobutton">
										   <input data-hide=".os-3" type="radio" name="mode5">
										   <i>Travaux légers non disponibles</i>
										</label>

										<label class="radiobutton">
										   <input data-hide=".os-3" type="radio" name="mode5">
										   <i>Rechute ou aggravation</i>
										</label>

										<label class="radiobutton">
										   <input data-hide=".os-3" data-show=".os-3-1" type="radio" name="mode5">
										   <i>Autre</i>
										</label>

										<div class="hide sp-s os-3 os-3-1 control-group">
											<label><span class="rft">*</span> Précisez</label>
											<input type="text" name="nm" value="">
										</div>
								   </div>

								</label>

							</div>

						</div>


						<div class="box2 hide os-1 os-1-5">
							<h4>Autre situation</h4>

							<div class="text">

								<div class="control-group">
									<label><span class="rft">*</span> Expliquez votre situation</label>
									<textarea data-characters="250"></textarea>
									<p class="clarification">(250 caractères au maximum)</p>
								</div>

							</div>

						</div>


					</div>	
					<div class="btns">
						<a class="btn btn7" href="6-l-intervention-chirurgicale.html">Précédent</a>
						<a class="btn btn3" href="8-resume.html">Suivant</a>
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