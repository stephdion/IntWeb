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
			<li class="active"><a href="#"><i>2</i><span>Visites médicales</span></a></li>
			<li><a href="#"><i>3</i></a></li>
			<li><a href="#"><i>4</i></a></li>
			<li><a href="#"><i>5</i></a></li>
			<li><a href="#"><i>6</i></a></li>
			<li><a href="#"><i>7</i></a></li>
			<li><a href="#"><i>8</i></a></li>
		</ul>
		

		<div class="strong">
			<div class="mcl2">

				<div class="step-info">
					<p class="number">2</p>
					<h2>Visites médicales</h2>
				</div>

				<div class="form-cont sp-xl">

					<div class="content">

						<div class="text sp-s">
							<p><span class="rft">*</span> Obligatoire</p>
						</div>


						<div class="box2">
							<h4>Dernière visite médicale</h4>

							<div class="text">

								<div class="control-group">
									<label>Quelle est la date de votre dernière visite médicale?</label>
									<div class="date-icon">
										<input type="text" name="date0" class="datepicker form-control" value="">
									</div>
								</div>

								<div class="control-group">
									<label>Quel est le nom du médecin?</label>
									<input type="text" name="nom value="">
								</div>

								<div class="control-group">
									<label>Dans quel établissement de santé cette visite a-t-elle eu lieu?</label>
									<input type="text" name="nom" value="">
								</div>

							</div>
						</div>

						<div class="box2">
							<h4>Prescriptions</h4>

							<div class="text">

								<label class="radiobutton required inline">
								   <i>Avez-vous reçu une ou plusieurs prescriptions?</i>
								   <p class="clarification">(Prescriptions d'examens, de physiothérapie, d'ergothérapie.)</p>
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
											<h4>Prescription numéro <span class="number">1</span></h4>
										</div>
										<div class="sub-cont">

											<label class="radiobutton">
												<i><span class="rft">*</span> Type de document</i>
											   <div class="radiobuttons">
													<label class="radiobutton">
													   <input type="radio" name="rb1">
													   <i>Prescription de traitements (physiothérapie, ergothérapie)</i>
													</label>

													<label class="radiobutton">
													   <input type="radio" name="rb1">
													   <i>Prescription d'examens (radiographie, échographie, etc.)</i>
													</label>

												</div>
											</label>

											<div class="control-group">
												<label><span class="rft">*</span> Vous devez joindre une copie de votre prescription.</label>
												<p class="clarification">(Document PDF, image, photo ou autre.)</p>
												<br>
												<div class="file">
													<label class="file-btn"><i class="icon-attach"></i><span>Parcourir</span></label>
													<input type="file" name="file1">
													<a href="#" class="btn-remove"><i class="icon-remove"></i></a>
													<div class="detail"><i class="icon-file"></i><span></span></div>
												</div>
											</div>

										</div>	
									</div>
								</div>

								<div class="btns3">
									<a href="#" class="btn4 btn-add" data-block=".block-prescription"><i class="icon-add"></i><span>Ajouter une prescription</span></a>
								</div>
							</div>
						</div>


						<div class="box2">
							<h4>Prochaines visites médicales</h4>

							<div class="text">

								<label class="radiobutton required inline">
								   <i>Avez-vous une ou plusieurs autres visites médicales de prévues?</i>
								   <div class="radiobuttons">
									   	
										<label class="radiobutton">
										   <input data-show=".os-2-1" data-hide=".os-2" type="radio" name="mode2">
										   <i>Oui</i>
										</label>

										<label class="radiobutton">
										   <input data-hide=".os-2" type="radio" name="mode2">
										   <i>Non</i>
										</label>
									
								   </div>

								</label>

							</div>


							<div class="hide os-2-1 os-2">
								<div class="multiblocks">
									<div class="sub-block">
										<div class="header">
											<h4>Visite médicale numéro <span class="number">1</span></h4>
										</div>
										<div class="sub-cont">

											<div class="control-group">
												<label>Date prévue</label>
												<div class="date-icon">
													<input type="text" name="date1" class="datepicker form-control" value="">
												</div>
											</div>

											<div class="control-group">
												<label>Nom du médecin</label>
												<input type="text" name="nom" value="">
											</div>

											<div class="control-group">
												<label>Nom de l'établissement de santé</label>
												<input type="text" name="nom" value="">
											</div>

											<label class="radiobutton">
												<i>Autre visite médicale</i>
											   <div class="radiobuttons">
													<label class="radiobutton">
													   <input type="radio" name="rb2">
													   <i>Même médecin</i>
													</label>

													<label class="radiobutton">
													   <input type="radio" name="rb2">
													   <i>Autre médecin</i>
													</label>
												</div>
											</label>


										</div>	
									</div>
								</div>

								<div class="btns3">
									<a href="#" class="btn4 btn-add" data-block=".block-visite"><i class="icon-add"></i><span>Ajouter une visite médicale</span></a>
								</div>
							</div>
						</div>


					</div>	
					<div class="btns">
						<a class="btn btn7" href="1-le-dossier.html">Précédent</a>
						<a class="btn btn3" href="3-les-rapports-medicaux.html">Suivant</a>
					</div>
				</div>

				<div class="btns">
					<a class="btn btn4a" href="#"><i class="icon-save"></i> Enregistrer en brouillon</a>
					<a class="btn btn4a" href="#"><i class="icon-delete"></i> Supprimer le brouillon</a>
				</div>

			</div>
		</div>

	</section>


	<div class="block-prescription hide">
		<div class="sub-block">
			<div class="header">
				<a class="btn4a btn-delete" href="#"><i class="icon-delete2"></i><span>Supprimer</span></a>
				<h4>Prescription numéro <span class="number">1</span></h4>
			</div>
			<div class="sub-cont">

				<label class="radiobutton">
					<i><span class="rft">*</span> Type de document</i>
				   <div class="radiobuttons">
						<label class="radiobutton">
						   <input type="radio" name="rb1-_N_">
						   <i>Prescription de traitements (physiothérapie, ergothérapie)</i>
						</label>

						<label class="radiobutton">
						   <input type="radio" name="rb1-_N_">
						   <i>Prescription d'examens (radiographie, échographie, etc.)</i>
						</label>

					</div>
				</label>

				<div class="control-group">
					<label><span class="rft">*</span> Vous devez joindre une copie de votre prescription.</label>
					<p class="clarification">(Document PDF, image, photo ou autre.)</p>
					<br>
					<div class="file">
						<label class="file-btn"><i class="icon-attach"></i><span>Parcourir</span></label>
						<input type="file" name="file1-_N_">
						<a href="#" class="btn-remove"><i class="icon-remove"></i></a>
						<div class="detail"><i class="icon-file"></i><span></span></div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="block-visite hide">
		<div class="sub-block">
			<div class="header">
				<a class="btn4a btn-delete" href="#"><i class="icon-delete2"></i><span>Supprimer</span></a>
				<h4>Visite médicale numéro <span class="number">1</span></h4>
			</div>
			<div class="sub-cont">

				<div class="control-group">
					<label>Date prévue</label>
					<div class="date-icon">
						<input type="text" name="date1-_N_" class="datepicker form-control" value="">
					</div>
				</div>

				<div class="control-group">
					<label>Nom du médecin</label>
					<input type="text" name="nom-_N_" value="">
				</div>

				<div class="control-group">
					<label>Nom de l'établissement de santé</label>
					<input type="text" name="nom-_N_" value="">
				</div>

				<label class="radiobutton">
					<i>Autre visite médicale</i>
				   <div class="radiobuttons">
						<label class="radiobutton">
						   <input type="radio" name="rb2-_N_">
						   <i>Même médecin</i>
						</label>

						<label class="radiobutton">
						   <input type="radio" name="rb2-_N_">
						   <i>Autre médecin</i>
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