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
			<h1>ÉVOLUTION DE LA SITUATION (PROGRAMME POUR UNE MATERNITÉ SANS DANGER)</h1>
		</div>
	</header>

	<section class="container">


		<ul class="nav nav-wizard">
			<li class="completed"><a href="#"><i>1</i></a></li>
			<li class="active"><a href="#"><i>2</i><span>Renseignements sur la situation professionnelle</span></a></li>
			<li><a href="#"><i>3</i></a></li>
			<li><a href="#"><i>4</i></a></li>
		</ul>

		<div class="strong">
			<div class="mcl2">

				<div class="step-info">
					<p class="number">2</p>
					<h2>Renseignements sur la situation professionnelle</h2>
				</div>

				<div class="form-cont sp-xl">

					<div class="content">
						
						<div class="text sp-s">
							<p><span class="rft">*</span> Obligatoire</p>
						</div>

						<div class="box2">
							<h4>Changement de situation professionnelle</h4>
							<div class="text">
								<label class="radiobutton required">
								   <i>Quelle situation s'applique à vous?</i>
								   <div class="radiobuttons">
									   	
										<label class="radiobutton">
										   <input type="radio" name="mode1" data-show=".os-1-1" data-hide=".os-1">
										   <i> J'occupe un nouvel emploi ou un nouveau poste</i>
										</label>

										<label class="radiobutton">
										   <input type="radio" name="mode1" data-show=".os-1-2" data-hide=".os-1">
										   <i>J'ai de nouvelles affectations de tâche ou mon employeur a modifié ou adapté mon poste de travail</i>
										</label>

										<label class="radiobutton">
										   <input type="radio" name="mode1" data-show=".os-1-3" data-hide=".os-1">
										   <i>Mon emploi s'est terminé</i>
										</label>

										<label class="radiobutton">
										   <input type="radio" name="mode1" data-show=".os-1-4" data-hide=".os-1">
										   <i>Je suis en retrait préventif</i>
										</label>

										<label class="radiobutton">
										   <input type="radio" name="mode1" data-show=".os-1-5" data-hide=".os-1">
										   <i>Aucun changement</i>
										</label>
										
								   </div>
								</label>


								<div class="hide os-1 os-1-1 os-1-2 os-1-3 os-1-4">
									<div class="control-group">
										<label><span class="rft">*</span> Nom de l'employeur</label>
										<input type="text" name="nom" value="">
									</div>
								</div>

								<div class="hide os-1 os-1-1">
									<div class="control-group">
										<label><span class="rft">*</span> Date de début du nouvel emploi</label>
										<div class="date-icon">
											<input type="text" name="date0" class="datepicker" value="">
										</div>
									</div>
									<div class="control-group">
										<label>Date de fin du nouvel emploi (si connue)</label>
										<div class="date-icon">
											<input type="text" name="date0" class="datepicker" value="">
										</div>
									</div>
									<div class="control-group">
										<label><span class="rft">*</span> Salaire annuel brut du nouvel emploi</label>
										<input type="text" name="nom" class="amount" value="">
									</div>
								</div>

								<div class="hide os-1 os-1-2">
									<div class="control-group">
										<label><span class="rft">*</span> Date du début du changement</label>
										<div class="date-icon">
											<input type="text" name="date0" class="datepicker" value="">
										</div>
									</div>
									<div class="control-group">
										<label>Date du fin du changement (si connue)</label>
										<div class="date-icon">
											<input type="text" name="date0" class="datepicker" value="">
										</div>
									</div>
									<div class="control-group">
										<label><span class="rft">*</span> Salaire annuel brut des nouvelles affectations</label>
										<input type="text" name="nom" class="amount" value="">
									</div>
								</div>

								<div class="hide os-1 os-1-3">
									<div class="control-group">
										<label><span class="rft">*</span> Date de fin de l'emploi​​​​​​​</label>
										<div class="date-icon">
											<input type="text" name="date0" class="datepicker" value="">
										</div>
									</div>

									<label class="radiobutton required">
									   <i>Raison de fin de l'emploi</i>
									   <div class="radiobuttons">
										   	
											<label class="radiobutton">
											   <input type="radio" name="mode2" data-show=".os-2-1" data-hide=".os-2">
											   <i>Fin de contrat</i>
											</label>

											<label class="radiobutton">
											   <input type="radio" name="mode2" data-show=".os-2-2" data-hide=".os-2">
											   <i>Mise à pied</i>
											</label>

											<label class="radiobutton">
											   <input type="radio" name="mode2" data-show=".os-2-3" data-hide=".os-2">
											   <i>Démission</i>
											</label>

											<label class="radiobutton">
											   <input type="radio" name="mode2" data-show=".os-2-4" data-hide=".os-2">
											   <i>L'entreprise a cessé ses activités</i>

												<label class="radiobutton hide os-1 os-2 os-2-4">
												   <i><span class="rft">*</span> Raison de la cessation des activités</i>
												   <div class="radiobuttons">
													   	
														<label class="radiobutton">
														   <input type="radio" name="mode3" data-show=".os-3-1" data-hide=".os-3">
														   <i>Fermeture définitive</i>
														</label>

														<label class="radiobutton">
														   <input type="radio" name="mode3" data-show=".os-3-2" data-hide=".os-3">
														   <i>Grève ou lock-out</i>
														</label>

														<label class="radiobutton">
														   <input type="radio" name="mode3" data-show=".os-3-3" data-hide=".os-3">
														   <i>Fin des activités saisonnières</i>
														</label>

														<label class="radiobutton">
														   <input type="radio" name="mode3" data-show=".os-3-4" data-hide=".os-3">
														   <i>Autre raison</i>

															<div class="control-group hide os-1 os-2 os-3 os-3-4">
																<label><span class="rft">*</span> Préciser</label>
																<input type="text" name="nom" value="">
															</div>
														</label>
														
												   </div>
												</label>

											</label>
											
									   </div>
									</label>
								</div>

								<div class="hide os-1 os-1-4">
									<div class="control-group">
										<label><span class="rft">*</span> Date du dernier jour travaillé</label>
										<div class="date-icon">
											<input type="text" name="date0" class="datepicker" value="">
										</div>
									</div>
								</div>




							</div>
						</div>


					</div>


					<div class="btns">
						<a class="btn btn7" href="1-mon-dossier.html">Précédent</a>
						<a class="btn btn3" href="3-ma-situation-personnelle.html">Suivant</a>
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