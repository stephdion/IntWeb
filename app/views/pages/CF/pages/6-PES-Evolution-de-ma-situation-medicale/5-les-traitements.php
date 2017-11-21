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
			<li class="active"><a href="#"><i>5</i><span>Traitements</span></a></li>
			<li><a href="#"><i>6</i></a></li>
			<li><a href="#"><i>7</i></a></li>
			<li><a href="#"><i>8</i></a></li>
		</ul>

		<div class="strong">
			<div class="mcl2">

				<div class="step-info">
					<p class="number">5</p>
					<h2>Traitements</h2>
				</div>

				<div class="form-cont sp-xl">

					<div class="content">

						<div class="text sp-s">
							<p><span class="rft">*</span> Obligatoire</p>
						</div>


						<div class="box2">
							<h4>Traitements</h4>

							<div class="text">

								<label class="radiobutton required inline">
								   <i>Recevez-vous des traitements ou en avez-vous de prescrits?</i>
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
											<h4>Traitement numéro <span class="number">1</span></h4>
										</div>
										<div class="sub-cont">

											<label class="radiobutton">
												<i><span class="rft">*</span> Type de traitement</i>
											   <div class="radiobuttons">
													<label class="radiobutton">
													   <input type="radio" name="rb1" data-hide=".os-2">
													   <i>Physiothérapie</i>
													</label>

													<label class="radiobutton">
													   <input type="radio" name="rb1" data-hide=".os-2">
													   <i>Ergothérapie</i>
													</label>

													<label class="radiobutton">
													   <input type="radio" name="rb1" data-show=".os-2-3" data-hide=".os-2">
													   <i>Autre</i>
													</label>

													<div class="control-group hide os-2-3 os-2">
														<label><span class="rft">*</span> Précisez </label>
														<input type="text" name="p">
													</div>

												</div>
											</label>

											<label class="radiobutton">
												<i><span class="rft">*</span> Ce traitement se poursuit-il ou est-il nouveau?</i>
											   <div class="radiobuttons">
													<label class="radiobutton">
													   <input type="radio" name="rb2" data-show=".os-3-1" data-hide=".os-3">
													   <i>Nouveau traitement</i>
													</label>

													<label class="radiobutton">
													   <input type="radio" name="rb2" data-show=".os-3-2" data-hide=".os-3">
													   <i>Traitement qui se poursuit </i>
													</label>

												</div>
											</label>

											<div class="hide os-3 os-3-1">
												
												<div class="control-group">
													<label>Date de début du traitement </label>
													<div class="date-icon">
														<input type="text" name="date1" class="datepicker form-control" value="">
													</div>
												</div>

											</div>

											<div class="control-group">
												<label>Date de fin du traitement</label>
												<div class="date-icon">
													<input type="text" name="date1" class="datepicker form-control" value="">
												</div>
											</div>

											<div class="control-group">
												<label>Fréquence des traitements</label>
												<p class="clarification">(Ex. : 1 fois par semaine, 2 fois par mois.)</p>
												<input type="text" name="text" value="">
											</div>

										</div>	
									</div>
								</div>

								<div class="btns3">
									<a href="#" class="btn4 btn-add" data-block=".block-traitement"><i class="icon-add"></i><span>Ajouter un nouveau traitement</span></a>
								</div>
							</div>
						</div>


					</div>	
					<div class="btns">
						<a class="btn btn7" href="4-les-examens.html">Précédent</a>
						<a class="btn btn3" href="6-l-intervention-chirurgicale.html">Suivant</a>
					</div>
				</div>

				<div class="btns">
					<a class="btn btn4a" href="#"><i class="icon-save"></i> Enregistrer en brouillon</a>
					<a class="btn btn4a" href="#"><i class="icon-delete"></i> Supprimer le brouillon</a>
				</div>

			</div>
		</div>

	</section>


	<div class="block-traitement hide">
		<div class="sub-block">
			<div class="header">
				<a class="btn4a btn-delete" href="#"><i class="icon-delete2"></i><span>Supprimer</span></a>
				<h4>Traitement numéro <span class="number">1</span></h4>
			</div>
			<div class="sub-cont">
				<label class="radiobutton">
					<i><span class="rft">*</span> Type de traitement</i>
				   <div class="radiobuttons">
						<label class="radiobutton">
						   <input type="radio" name="rb1-_N_" data-hide=".os-2-_N_">
						   <i>Physiothérapie</i>
						</label>

						<label class="radiobutton">
						   <input type="radio" name="rb1-_N_" data-hide=".os-2-_N_">
						   <i>Ergothérapie</i>
						</label>

						<label class="radiobutton">
						   <input type="radio" name="rb1-_N_" data-show=".os-2-3-_N_" data-hide=".os-2-_N_">
						   <i>Autre</i>
						</label>

						<div class="control-group hide os-2-3-_N_ os-2-_N_">
							<label><span class="rft">*</span> Précisez </label>
							<input type="text" name="p">
						</div>

					</div>
				</label>
				<label class="radiobutton">
					<i><span class="rft">*</span> Ce traitement se poursuit-il ou est-il nouveau?</i>
				   <div class="radiobuttons">
						<label class="radiobutton">
						   <input type="radio" name="rb2-_N_" data-show=".os-3-1-_N_" data-hide=".os-3-_N_">
						   <i>Nouveau traitement</i>
						</label>

						<label class="radiobutton">
						   <input type="radio" name="rb2-_N_" data-show=".os-3-2-_N_" data-hide=".os-3-_N_">
						   <i>Traitement qui se poursuit </i>
						</label>

					</div>
				</label>
				<div class="hide os-3-_N_ os-3-1-_N_">
					<div class="control-group">
						<label>Date de début du traitement </label>
						<div class="date-icon">
							<input type="text" name="date1-_N_" class="datepicker form-control" value="">
						</div>
					</div>
				</div>
				<div class="control-group">
					<label>Date de fin du traitement</label>
					<div class="date-icon">
						<input type="text" name="date1-_N_" class="datepicker form-control" value="">
					</div>
				</div>
				<div class="control-group">
					<label>Fréquence des traitements</label>
					<p class="clarification">(Ex. : 1 fois par semaine, 2 fois par mois.)</p>
					<input type="text" name="text" value="">
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