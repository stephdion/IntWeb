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
			<li class="active"><a href="#"><i>3</i><span>Rapports médicaux</span></a></li>
			<li><a href="#"><i>4</i></a></li>
			<li><a href="#"><i>5</i></a></li>
			<li><a href="#"><i>6</i></a></li>
			<li><a href="#"><i>7</i></a></li>
			<li><a href="#"><i>8</i></a></li>
		</ul>

		<div class="strong">
			<div class="mcl2">

				<div class="step-info">
					<p class="number">3</p>
					<h2>Rapports médicaux</h2>
				</div>

				<div class="form-cont sp-xl">

					<div class="content">

						<div class="text sp-s">
							<p><span class="rft">*</span> Obligatoire</p>
						</div>


						<div class="box2">
							<h4>Rapport final</h4>

							<div class="text">

								<label class="radiobutton required inline">
								   <i>Votre médecin vous a-t-il remis le document Rapport final?</i>
								   <div class="radiobuttons">
									   	
										<label class="radiobutton">
										   <input data-hide=".os-1" data-show=".os-1-1" type="radio" name="mode2">
										   <i>Oui</i>
										</label>

										<label class="radiobutton">
										   <input data-hide=".os-1" data-show=".os-1-2" type="radio" name="mode2">
										   <i>Non</i>
										</label>

								   </div>

								</label>

								<div class="hide os-1 os-1-1">

									<div class="control-group">
										<label><span class="rft">*</span> Quelle est la date de consolidation de votre lésion professionnelle?</label>
										<div class="date-icon">
											<input type="text" name="date1" class="datepicker form-control" value="">
										</div>
									</div>

								</div>

							</div>

						</div>


						<div class="hide box2 os-1 os-1-1">
							<div class="text">

								<label class="radiobutton required inline">
								   <i>Votre lésion professionnelle entraîne-t-elle une atteinte permanente?</i>
								   <div class="radiobuttons">
									   	
										<label class="radiobutton">
										   <input data-hide=".os-2" data-show=".os-2-1" type="radio" name="mode3">
										   <i>Oui</i>
										</label>

										<label class="radiobutton">
										   <input data-hide=".os-2" data-show=".os-2-2" type="radio" name="mode3">
										   <i>Non</i>
										</label>

										<label class="radiobutton">
										   <input data-hide=".os-2" data-show=".os-2-3" type="radio" name="mode3">
										   <i>Non inscrit au rapport</i>
										</label>

								   </div>

								</label>
							</div>


							<div class="hide os-2 os-2-1">
								<div class="text">

									<label class="radiobutton required inline">
									   <i>Votre médecin vous a-t-il remis le document Rapport d'évaluation médicale?</i>
									   <div class="radiobuttons">
										   	
											<label class="radiobutton">
											   <input data-hide=".os-3" data-show=".os-3-1" type="radio" name="mode4">
											   <i>Oui</i>
											</label>

											<label class="radiobutton">
											   <input data-hide=".os-3" data-show=".os-3-2" type="radio" name="mode4">
											   <i>Non</i>
											</label>

									   </div>

									</label>


									<div class="hide os-3 os-3-1">

										<div class="control-group">
											<label><span class="rft">*</span> Quelle était la date de cet examen?</label>
											<div class="date-icon">
												<input type="text" name="date1" class="datepicker form-control" value="">
											</div>
										</div>

										<div class="control-group">
											<label>Quel est le nom du médecin ou du spécialiste?</label>
												<input type="text" name="date1" value="">
										</div>
										
									</div>

									<div class="hide os-3 os-3-2">

										<label class="radiobutton required inline">
										   <i>Votre médecin a-t-il reporté l'évaluation médicale?</i>
										   <div class="radiobuttons">
											   	
												<label class="radiobutton">
												   <input data-hide=".os-4" data-show=".os-4-1" type="radio" name="mode5">
												   <i>Oui</i>
												</label>

												<label class="radiobutton">
												   <input data-hide=".os-4" data-show=".os-4-2" type="radio" name="mode5">
												   <i>Non</i>
												</label>

										   </div>

										</label>
										

										<div class="hide os-4 os-4-1">

											<div class="control-group">
												<label><span class="rft">*</span> Quelle est la date prévue de l'évaluation médicale?</label>
												<div class="date-icon">
													<input type="text" name="date1" class="datepicker form-control" value="">
												</div>
											</div>

										</div>

										<div class="hide os-4 os-4-2">

											<label class="radiobutton required inline">
											   <i>Votre médecin vous a-t-il référé à un autre médecin ou spécialiste?</i>
											   <div class="radiobuttons">
												   	
													<label class="radiobutton">
													   <input data-hide=".os-5" data-show=".os-5-1" type="radio" name="mode6">
													   <i>Oui</i>
													</label>

													<label class="radiobutton">
													   <input data-hide=".os-5" data-show=".os-5-2" type="radio" name="mode6">
													   <i>Non</i>
													</label>

											   </div>

											</label>

											<div class="hide os-5 os-5-1">
												<div class="control-group">
													<label>Quel est le nom du médecin ou du spécialiste?</label>
													<input type="text" name="date1" value="">
												</div>
											</div>

										</div>


									</div>


								</div>
							</div>

						</div>


						<div class="hide os-1 os-1-1 box2">
							<div class="text">

								<label class="radiobutton required inline">
								   <i>Votre lésion professionnelle entraîne-t-elle des limitations fonctionnelles?</i>
								   <div class="radiobuttons">
									   	
										<label class="radiobutton">
										   <input data-hide=".os-6" data-show=".os-6-1" type="radio" name="mode7">
										   <i>Oui</i>
										</label>

										<label class="radiobutton">
										   <input data-hide=".os-6" data-show=".os-6-2" type="radio" name="mode7">
										   <i>Non</i>
										</label>

										<label class="radiobutton">
										   <input data-hide=".os-6" data-show=".os-6-3" type="radio" name="mode7">
										   <i>Non inscrit au rapport</i>
										</label>

								   </div>

								</label>
							</div>


							<div class="hide os-6 os-6-1">
								<div class="text">

									<label class="radiobutton required inline">
									   <i>Votre médecin vous a-t-il remis le document Rapport d'évaluation médicale?</i>
									   <div class="radiobuttons">
										   	
											<label class="radiobutton">
											   <input data-hide=".os-7" data-show=".os-7-1" type="radio" name="mode8">
											   <i>Oui</i>
											</label>

											<label class="radiobutton">
											   <input data-hide=".os-7" data-show=".os-7-2" type="radio" name="mode8">
											   <i>Non</i>
											</label>

									   </div>

									</label>


									<div class="hide os-7 os-7-1">

										<div class="control-group">
											<label><span class="rft">*</span> Quelle était la date de cet examen?</label>
											<div class="date-icon">
												<input type="text" name="date1" class="datepicker form-control" value="">
											</div>
										</div>

										<div class="control-group">
											<label>Quel est le nom du médecin ou du spécialiste?</label>
												<input type="text" name="date1" value="">
										</div>
										
									</div>

									<div class="hide os-7 os-7-2">

										<label class="radiobutton required inline">
										   <i>Votre médecin a-t-il reporté l'évaluation médicale?</i>
										   <div class="radiobuttons">
											   	
												<label class="radiobutton">
												   <input data-hide=".os-8" data-show=".os-8-1" type="radio" name="mode9">
												   <i>Oui</i>
												</label>

												<label class="radiobutton">
												   <input data-hide=".os-8" data-show=".os-8-2" type="radio" name="mode9">
												   <i>Non</i>
												</label>

										   </div>

										</label>
										

										<div class="hide os-8 os-8-1">

											<div class="control-group">
												<label><span class="rft">*</span> Quelle est la date prévue de l'évaluation médicale?</label>
												<div class="date-icon">
													<input type="text" name="date1" class="datepicker form-control" value="">
												</div>
											</div>

										</div>

										<div class="hide os-8 os-8-2">

											<label class="radiobutton required inline">
											   <i>Votre médecin vous a-t-il référé à un autre médecin ou spécialiste?</i>
											   <div class="radiobuttons">
												   	
													<label class="radiobutton">
													   <input data-hide=".os-9" data-show=".os-9-1" type="radio" name="mode10">
													   <i>Oui</i>
													</label>

													<label class="radiobutton">
													   <input data-hide=".os-9" data-show=".os-9-2" type="radio" name="mode10">
													   <i>Non</i>
													</label>

											   </div>

											</label>

											<div class="hide os-9 os-9-1">
												<div class="control-group">
													<label>Quel est le nom du médecin ou du spécialiste?</label>
													<input type="text" name="date1" value="">
												</div>
											</div>

										</div>


									</div>


								</div>
							</div>

						</div>





					</div>	
					<div class="btns">
						<a class="btn btn7" href="2-les-visites-medicales.html">Précédent</a>
						<a class="btn btn3" href="4-les-examens.html">Suivant</a>
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