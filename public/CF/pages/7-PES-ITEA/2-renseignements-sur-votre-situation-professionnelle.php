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
			<li class="active"><a href="#"><i>2</i><span>Renseignements sur la situation professionnelle</span></a></li>
			<li><a href="#"><i>3</i></a></li>
			<li><a href="#"><i>4</i></a></li>
			<li><a href="#"><i>5</i></a></li>
		</ul>

		<div class="strong">
			<div class="mcl2">

				<div class="step-info">
					<p class="number">2</p>
					<h2>Renseignements sur la situation professionnelle</h2>
				</div>

				<div class="form-cont sp-xl">

					<div class="content">


						<div class="box2">
							<h3>EMPLOYEUR NO 1</h3>
							<h4>Renseignements sur votre employeur</h4>
							<div class="text">
								<div class="control-group">
									<label><span class="rft">*</span>Nom de l'employeur​​​​​​​</label>
									<input type="text" name="montant">
								</div>
								<div class="control-group">
									<label><span class="rft">*</span>Adresse</label>
									<input type="text" name="montant">
								</div>
								<label class="radiobutton required">
								   <i>Laquelle des deux adresses avez-vous inscrite?</i>
								   <div class="radiobuttons">
									   	
										<label class="radiobutton">
										   <input type="radio" name="mode">
										   <i>Adresse du siège social</i>
										</label>

										<label class="radiobutton">
										   <input type="radio" name="mode">
										   <i>Adresse de l'établissement</i>
										</label>
										
								   </div>
								</label>
							</div>
						</div>

						<div class="box2">
							<h4>Statut d'emploi</h4>
							<div class="text">
								<label class="radiobutton required">
								   <i>Q​​​uel est votre statut d'emploi?</i>
								   <div class="radiobuttons">
									   	
										<label class="radiobutton">
										   <input type="radio" name="mode2" data-show=".os-1-1" data-hide=".os-1">
										   <i>Employée salariée</i>
										</label>

										<label class="radiobutton">
										   <input type="radio" name="mode2" data-show=".os-1-2" data-hide=".os-1">
										   <i>Travailleuse autonome</i>
										</label>

										<div class="hide control-group os-1-2 os-1">
											<label class="radiobutton">
											   <i><span class="rft">*</span> Est-ce que votre entreprise est incorporée?</i>
											   <div class="radiobuttons">
												   	
													<label class="radiobutton">
													   <input type="radio" name="mode3">
													   <i>Oui</i>
													</label>

													<label class="radiobutton">
													   <input type="radio" name="mode3">
													   <i>Non</i>
													</label>
													
											   </div>
											</label>
										</div>


										<label class="radiobutton">
										   <input type="radio" name="mode2" data-show=".os-1-3" data-hide=".os-1">
										   <i>Responsable d'un service de garde en milieu familial lié à un bureau coordonnateur (RSG)</i>
										</label>


										<div class="hide control-group os-1-3 os-1">
											<label class="radiobutton">
											   <i><span class="rft">*</span> Laquelle des deux adresses avez-vous inscrite?</i>
											   <div class="radiobuttons">
												   	
													<label class="radiobutton">
													   <input type="radio" name="mode4" data-show=".os-2-1" data-hide=".os-2">
													   <i>Oui</i>
													</label>

													<label class="radiobutton">
													   <input type="radio" name="mode4" data-hide=".os-2">
													   <i>Non</i>
													</label>

													<label class="radiobutton">
													   <input type="radio" name="mode4" data-hide=".os-2">
													   <i>Je ne sais pas</i>
													</label>
													
													<div class="hide os-1 os-2 os-2-1">
														<div class="control-group">
															<label><span class="rft">*</span> Date de fermeture (Si elle est  connue.)</label>
															<div class="date-icon">
																<input type="text" name="date0" class="datepicker" value="">
															</div>
														</div>
													</div>
											   </div>
											</label>
										</div>

										<label class="radiobutton">
										   <input type="radio" name="mode2" data-show=".os-1-4" data-hide=".os-1">
										   <i>Autre statut d'emploi</i>
										</label>

										<div class="hide control-group os-1-4 os-1">
											<label><span class="rft">*</span> Précisez </label>
											<input type="text" value="">
										</div>
										
								   </div>
								</label>
							</div>
						</div>


						<div class="box2">
							<h4>Certificat visant le retrait préventif ou l'affectation</h4>
							<div class="text">
								<label class="radiobutton required">
								   <i>Est-ce que le médecin a complété le Certificat visant le retrait préventif ou l'affectation pour cet emploi?</i>
								   <div class="radiobuttons">
									   	
										<label class="radiobutton">
										   <input type="radio" name="mode5" data-show=".os-3-1" data-hide=".os-3">
										   <i>Oui</i>
										</label>

										<label class="radiobutton">
										   <input type="radio" name="mode5" data-hide=".os-3">
										   <i>Non</i>
										</label>
										
								   </div>
								</label>
								<label class="radiobutton required hide os-3 os-3-1">
								   <i>Avez-vous remis ou prévoyez-vous remettre ce certificat à votre employeur?</i>
								   <div class="radiobuttons">
									   	
										<label class="radiobutton">
										   <input type="radio" name="mode6" data-show=".os-4-1" data-hide=".os-4">
										   <i>Oui</i>
										</label>

										<label class="radiobutton">
										   <input type="radio" name="mode6" data-hide=".os-4">
										   <i>Non</i>
										</label>
													
										<div class="hide os-3 os-4 os-4-1">
											<div class="control-group">
												<label><span class="rft">*</span> Date de remise du certificat</label>
												<div class="date-icon">
													<input type="text" name="date0" class="datepicker" value="">
												</div>
											</div>
										</div>
										
								   </div>
								</label>
							</div>
						</div>


						<div class="box2">
							<h4>Situation au travail</h4>
							<div class="text">
								<label class="radiobutton required">
								   <i>Êtes-vous affectée à d'autres tâches ou vos tâches ont-elles été modifiées en tenant compte des recommandations émises?</i>
								   <div class="radiobuttons">
									   	
										<label class="radiobutton">
										   <input type="radio" name="mode7" data-show=".os-5-1" data-hide=".os-5">
										   <i>Oui</i>
										</label>

										<label class="radiobutton">
										   <input type="radio" name="mode7" data-show=".os-5-2" data-hide=".os-5">
										   <i>Non</i>
										</label>
										
								   </div>
								</label>

								<div class="hide os-5 os-5-1">
									<div class="control-group">
										<label><span class="rft">*</span> Depuis quand?</label>
										<div class="date-icon">
											<input type="text" name="date1" class="datepicker" value="">
										</div>
									</div>
									<div class="control-group">
										<label><span class="rft">*</span> Date prévue de fin d'allaitement</label>
										<div class="date-icon">
											<input type="text" name="date2" class="datepicker" value="">
										</div>
									</div>
								</div>
								
								<label class="hide os-5 os-5-2 radiobutton required">
								   <i>Motif de l'arrêt</i>
								   <div class="radiobuttons">
									   	
										<label class="radiobutton">
										   <input type="radio" name="mode8" data-show=".os-6-1" data-hide=".os-6">
										   <i>Retrait préventif <a href="javascript:(void)" title="Vous êtes disponible et apte au travail, mais votre employeur n'a pas d'affectation sécuritaire à vous offrir."><i class="icon-help"></i></a></i>
										</label>

										<label class="radiobutton">
										   <input type="radio" name="mode8" data-show=".os-6-2" data-hide=".os-6">
										   <i>Autre</i>
										</label>

										<div class="hide control-group os-6-2 os-6">
											<label><span class="rft">*</span> Précisez </label>
											<input type="text" value="">
										</div>
										
								   </div>
								</label>
								
								<label class="hide os-5 os-6 os-6-1 radiobutton required">
								   <i>Présentement, êtes-vous disponible pour une affectation?</i>
								   <div class="radiobuttons">
									   	
										<label class="radiobutton">
										   <input type="radio" name="mode9" data-show=".os-7-1" data-hide=".os-7">
										   <i>Oui</i>
										</label>

										<label class="radiobutton">
										   <input type="radio" name="mode9" data-show=".os-7-2" data-hide=".os-7">
										   <i>Non</i>
										</label>

										<div class="hide os-5 os-6 os-7 os-7-1">
											<div class="control-group">
												<label><span class="rft">*</span> Date prévue de fin d'allaitement</label>
												<div class="date-icon">
													<input type="text" name="date3" class="datepicker" value="">
												</div>
											</div>
										</div>

										<div class="hide os-5 os-6 os-7 os-7-2">
											<div class="control-group">
												<label><span class="rft">*</span> Date prévue de disponibilité pour une affectation (Si elle est connue.)</label>
												<div class="date-icon">
													<input type="text" name="date4" class="datepicker" value="">
												</div>
											</div>
										</div>
										
								   </div>
								</label>


							</div>
						</div>


					</div>


					<div class="btns">
						<a class="btn btn7" href="1-identification.html">Précédent</a>
						<a class="btn btn3" href="3-situation-familiale.html">Suivant</a>
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