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
			<li class="compelted"><a href="#"><i>1</i></a></li>
			<li class="compelted"><a href="#"><i>2</i></a></li>
			<li class="active"><a href="#"><i>3</i><span>Renseignements sur la situation personnelle</span></a></li>
			<li><a href="#"><i>4</i></a></li>
		</ul>

		<div class="strong">
			<div class="mcl2">

				<div class="step-info">
					<p class="number">3</p>
					<h2>Renseignements sur la situation personnelle</h2>
				</div>

				<div class="form-cont sp-xl">

					<div class="content">
						
						<div class="text sp-s">
							<p><span class="rft">*</span> Obligatoire</p>
						</div>

						<div class="box2">
							<h4>Régime québécois d'assurance parentale (RQAP)</h4>
							<div class="text">
								<label class="radiobutton required">
								   <i>Êtes-vous admissible au RQAP?</i>
								   <div class="radiobuttons">
									   	
										<label class="radiobutton">
										   <input type="radio" name="mode1" data-show=".os-1-1" data-hide=".os-1">
										   <i>Oui</i>
										</label>

										<label class="radiobutton">
										   <input type="radio" name="mode1" data-show=".os-1-2" data-hide=".os-1">
										   <i>Non</i>
										</label>
										
								   </div>
								</label>


								<div class="control-group hide os-1 os-1-1">
									<label><span class="rft">*</span> Date de début du RQAP</label>
									<div class="date-icon">
										<input type="text" name="date0" class="datepicker" value="">
									</div>
								</div>

								<label class="radiobutton required hide os-1 os-1-2">
								   <i>Vous devez nous faire parvenir la lettre de décision d'admissibilité du MTESS.</i>
								   <div class="radiobuttons">
									   	
										<label class="radiobutton">
										   <input type="radio" name="mode2" data-show=".os-2-1" data-hide=".os-2">
										   <i>Je veux joindre la lettre de décision</i>
										</label>

										<label class="radiobutton">
										   <input type="radio" name="mode2" data-show=".os-2-2" data-hide=".os-2">
										   <i>Je l'ai déjà envoyée</i>
										</label>

										<label class="radiobutton">
										   <input type="radio" name="mode2" data-show=".os-2-3" data-hide=".os-2">
										   <i>Je vais la faire parvenir par la poste ou par télécopieur</i>
										</label>
										
								   </div>
								</label>


									<div class="control-group hide os-1 os-2 os-2-1">
										<label><span class="rft">*</span> Joindre la lettre de décision</label>
										<div class="file">
											<label class="file-btn"><i class="icon-attach"></i><span>Parcourir</span></label>
											<input type="file" name="file">
											<a href="#" class="btn-remove"><i class="icon-remove"></i></a>
											<div class="detail"><i class="icon-file"></i><span></span></div>
										</div>
									</div>

							</div>
						</div>	


						<div class="box2">
							<h4>Changement lié à la grossesse</h4>
							<div class="text">
								<label class="radiobutton required">
								   <i>Quelle situation s'applique à vous?</i>
								   <div class="radiobuttons">
									   	
										<label class="radiobutton">
										   <input type="radio" name="mode3" data-show=".os-3-1" data-hide=".os-3">
										   <i>Le médecin a changé la date prévue d'accouchement</i>

											<div class="control-group hide os-3 os-3-1">
												<label><span class="rft">*</span> Nouvelle date prévue d'accouchement</label>
												<div class="date-icon">
													<input type="text" name="date0" class="datepicker" value="">
												</div>
											</div>

										</label>

										<label class="radiobutton">
										   <input type="radio" name="mode3" data-show=".os-3-2" data-hide=".os-3">
										   <i>J'ai accouché</i>

											<div class="control-group hide os-3 os-3-2">
												<label><span class="rft">*</span> Date d'accouchement</label>
												<div class="date-icon">
													<input type="text" name="date0" class="datepicker" value="">
												</div>
											</div>
										</label>

										<label class="radiobutton">
										   <input type="radio" name="mode3" data-show=".os-3-3" data-hide=".os-3">
										   <i>La grossesse a été interrompue</i>

											<div class="control-group hide os-3 os-3-3">
												<label><span class="rft">*</span> Date d'interruption de la grossesse</label>
												<div class="date-icon">
													<input type="text" name="date0" class="datepicker" value="">
												</div>
											</div>
										</label>

										<label class="radiobutton">
										   <input type="radio" name="mode3" data-show=".os-3-4" data-hide=".os-3">
										   <i>Aucun changement</i>
										</label>
										
								   </div>
								</label>
							</div>
						</div>



					</div>	


					<div class="btns">
						<a class="btn btn7" href="2-ma-situation-professionnelle.html">Précédent</a>
						<a class="btn btn3" href="4-resume.html">Suivant</a>
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