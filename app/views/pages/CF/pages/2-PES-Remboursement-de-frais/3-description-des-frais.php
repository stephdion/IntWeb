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
			<h1>Remboursement de frais - Hébergement/Repas</h1>
		</div>
	</header>

	<section class="container">

		<ul class="nav nav-wizard">
			<li class="completed"><a href="#"><i>1</i></a></li>
			<li class="active"><a href="#"><i>2</i><span>Description des frais</span></a></li>
			<li><a href="#"><i>3</i></a></li>
		</ul>

		<div class="strong">
			<div class="mcl2">

				<div class="step-info">
					<p class="number">2</p>
					<h2>Description des frais</h2>
				</div>

				<div class="infobox5 sp-xl">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>

				<div class="form-cont sp-xl">

					<div class="content">
						<div class="text sp-s">
							<p><span class="rft">*</span> Obligatoire</p>
						</div>


						<div class="box2">

							<div class="text">

								<div class="control-group">
									<label><span class="rft">*</span> Date</label>
									<div class="date-icon">
										<input type="text" class="datepicker form-control" value="">
									</div>
								</div>

								<label class="radiobutton required">
								   <i>Raison du déplacement</i>

								   <div class="radiobuttons">
									   	
										<label class="radiobutton">
										   <input type="radio" name="mode" value="create" data-hide=".os-1">
										   <i>Ergothérapie</i>
										</label>

										<label class="radiobutton">
										   <input type="radio" name="mode" value="create" data-hide=".os-1">
										   <i>Physiothérapie</i>
										</label>

										<label class="radiobutton">
										   <input type="radio" name="mode" value="create" data-hide=".os-1">
										   <i>Visite médicale</i>
										</label>

										<label class="radiobutton">
										   <input type="radio" name="mode" value="create" data-show=".os-1-1" data-hide=".os-1">
										   <i>Autre</i>
											<div class="control-group hide os-1-1 os-1">
												<label><span class="rft">*</span> Précisez </label>
												<input type="text" name="montant">
											</div>
										</label>

										
								   </div>
								</label>

							</div>
						</div>


						<div class="box2">

							<h4>Type de frais réclamés pour cette journée</h4>

							<div class="text">

								<div class="control-group">
									<label><span class="rft">*</span> Date</label>
									<div class="date-icon">
										<input type="text" class="datepicker form-control" value="">
									</div>
								</div>
							   	
								<div class="control-group">

									<label class="checkbox">
									   <input type="checkbox" name="mode2" data-show=".os-2-1" data-hide=".os-2">
									   <i>Frais de déplacement</i>
									</label>

									<label class="checkbox">
									   <input type="checkbox" name="mode3" data-show=".os-3-1" data-hide=".os-3">
									   <i>Frais d'hebergement</i>
										<div class="note hide sp-s os-3-1 os-3">
											<p><strong>Note: </strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua.</p>
										</div>
									</label>

									<label class="checkbox">
									   <input type="checkbox" name="mode4" data-show=".os-4-1" data-hide=".os-4">
									   <i>Frais de repas</i>
										<label class="radiobutton required inline hide os-4-1 os-4">
										   <i>Votre destination est-elle à plus de 16 km de votre résidence?</i>

										   <div class="radiobuttons">
											   	
												<label class="radiobutton">
												   <input type="radio" name="mod">
												   <i>Oui</i>
												</label>

												<label class="radiobutton">
												   <input type="radio" name="mod">
												   <i>Non</i>
												</label>
												
										   </div>
										</label>

									</label>

								</div>
							

							</div>
						</div>


						<div class="box2 hide os-2-1 os-2">

							<h4>Frais de déplacement</h4>

							<div class="text">
					   	
								<div class="control-group">
									<label><span class="rft">*</span> Moyen de transport utilisé</label>

									<label class="checkbox">
									   <input type="checkbox" name="mode90" data-show=".os-6-1" data-hide=".os-6">
									   <i>Transport en commun</i>
									</label>

									<label class="checkbox">
									   <input type="checkbox" name="mode91" data-show=".os-7-1" data-hide=".os-7">
									   <i>Voiture</i>
									</label>

									<label class="checkbox">
									   <input type="checkbox" name="mode92" data-show=".os-8-1" data-hide=".os-8">
									   <i>Taxi avec autorisation</i>
									</label>

									<label class="checkbox">
									   <input type="checkbox" name="mode93" data-show=".os-9-1" data-hide=".os-9">
									   <i>Ambulance</i>
									</label>

									<label class="checkbox">
									   <input type="checkbox" name="mode94" data-show=".os-10-1" data-hide=".os-10">
									   <i>Avion</i>
									</label>

									<label class="checkbox">
									   <input type="checkbox" name="mode95" data-show=".os-11-1" data-hide=".os-11">
									   <i>Autre</i>
									</label>

								</div>

							</div>
						</div>


						<div class="box2 hide os-6-1 os-6 os-2">
							<h4>Transport en commun</h4>
							<div class="text">


								<div class="multiblocks">
									<div class="sub-block">
										<div class="header">
											<h4><span class="number">1</span> - Transport</h4>
										</div>
										<div class="sub-cont">


											<div class="control-group">
												<label><span class="rft">*</span> Montant</label>
												<input type="text" name="a" class="amount"> $
											</div>


											<label class="radiobutton inline">
											   <div class="radiobuttons">
												   	
													<label class="radiobutton">
													   <input type="radio" name="mode70">
													   <i>Aller simple</i>
													</label>

													<label class="radiobutton">
													   <input type="radio" name="mode70">
													   <i>Aller-retour</i>
													</label>
												
											   </div>

											</label>

										</div>	
									</div>
								</div>

								<div class="btns3">
									<a href="#" class="btn4 btn-add" data-block=".block-transport"><i class="icon-add"></i><span>Ajouter un déplacement</span></a>
								</div>
							
							</div>
						</div>

						<div class="box2 hide os-7-1 os-7 os-2">
							<h4>Voiture avec autorisation</h4>
							<div class="text">


								<div class="multiblocks">
									<div class="sub-block">
										<div class="header">
											<h4><span class="number">1</span> - Voiture</h4>
										</div>
										<div class="sub-cont">


											<div class="control-group">
												<label><span class="rft">*</span> Distance parcourue</label>
												<input type="text" name="a" class="amount"> km
											</div>

											<label class="radiobutton inline">
											   <div class="radiobuttons">
												   	
													<label class="radiobutton">
													   <input type="radio" name="mode60">
													   <i>Aller simple</i>
													</label>

													<label class="radiobutton">
													   <input type="radio" name="mode60">
													   <i>Aller-retour</i>
													</label>
												
											   </div>

											</label>
											<br>
											<label class="radiobutton inline required">
												<i>Avez-vous une attestation médicale indiquant votre incapacité à utiliser les transports en commun?</i>
											   <div class="radiobuttons">
												   	
													<label class="radiobutton">
													   <input type="radio" name="mode61">
													   <i>Oui</i>
													</label>

													<label class="radiobutton">
													   <input type="radio" name="mode61">
													   <i>Non</i>
													</label>
												
											   </div>

											</label>

											<div class="control-group">
												<label>Frais d'utilisation demandés (525 km x 0.43$)</label>
												<input type="text" name="a" class="amount"> $
												<div class="clarification sp-s">
													<p><strong>Note:</strong></p>
													</p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
												tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
												quis nostrud.</p>
												</div>
											</div>

											<label class="radiobutton required">
												<i>Lieu de départ</i>
											   <div class="radiobuttons">
												   	
													<label class="radiobutton">
													   <input type="radio" name="mode62" data-hide=".os-12">
													   <i>Résidence personnelle</i>
													</label>

													<label class="radiobutton">
													   <input type="radio" name="mode62" data-hide=".os-12">
													   <i>Clinique ou hopital</i>
													</label>

													<label class="radiobutton">
													   <input type="radio" name="mode62" data-show=".os-12-1" data-hide=".os-12">
													   <i>Autre</i>

														<div class="control-group os-12 os-12-1 hide">
															<label><span class="rft">*</span> Precisez</label>
															<input type="text" name="a">
														</div>
													</label>
												
											   </div>

											</label>

											<label class="radiobutton required">
												<i>Lieu d'arrivé</i>
											   <div class="radiobuttons">
												   	
													<label class="radiobutton">
													   <input type="radio" name="mode63" data-hide=".os-13">
													   <i>Résidence personnelle</i>
													</label>

													<label class="radiobutton">
													   <input type="radio" name="mode63" data-hide=".os-13">
													   <i>Clinique ou hopital</i>
													</label>

													<label class="radiobutton">
													   <input type="radio" name="mode63" data-show=".os-13-1" data-hide=".os-13">
													   <i>Autre</i>

														<div class="control-group os-13 os-13-1 hide">
															<label><span class="rft">*</span> Precisez</label>
															<input type="text" name="a">
														</div>
													</label>
												
											   </div>

											</label>

										</div>	
									</div>
								</div>

								<div class="btns3">
									<a href="#" class="btn4 btn-add" data-block=".block-voiture"><i class="icon-add"></i><span>Ajouter un déplacement</span></a>
								</div>
							
							</div>
						</div>


						<div class="box2 hide os-8-1 os-8 os-2">
							<h4>Taxis avec autorisation</h4>
							<div class="text">


								<div class="multiblocks">
									<div class="sub-block">
										<div class="header">
											<h4><span class="number">1</span> - Taxi</h4>
										</div>
										<div class="sub-cont">


											<div class="control-group">
												<label><span class="rft">*</span> Montant</label>
												<input type="text" name="a" class="amount"> $
											</div>


											<label class="radiobutton inline">
											   <div class="radiobuttons">
												   	
													<label class="radiobutton">
													   <input type="radio" name="mode71">
													   <i>Aller simple</i>
													</label>

													<label class="radiobutton">
													   <input type="radio" name="mode71">
													   <i>Aller-retour</i>
													</label>
												
											   </div>

											</label>

										</div>	
									</div>
								</div>

								<div class="btns3">
									<a href="#" class="btn4 btn-add" data-block=".block-taxi"><i class="icon-add"></i><span>Ajouter un déplacement</span></a>
								</div>
							
							</div>
						</div>


						<div class="box2 hide os-9-1 os-9 os-2">
							<h4>Ambulance</h4>
							<div class="text">


								<div class="multiblocks">
									<div class="sub-block">
										<div class="header">
											<h4><span class="number">1</span> - Ambulance</h4>
										</div>
										<div class="sub-cont">


											<div class="control-group">
												<label><span class="rft">*</span> Montant</label>
												<input type="text" name="a" class="amount"> $
											</div>


											<label class="radiobutton inline">
											   <div class="radiobuttons">
												   	
													<label class="radiobutton">
													   <input type="radio" name="mode72">
													   <i>Aller simple</i>
													</label>

													<label class="radiobutton">
													   <input type="radio" name="mode72">
													   <i>Aller-retour</i>
													</label>
												
											   </div>

											</label>

										</div>	
									</div>
								</div>

								<div class="btns3">
									<a href="#" class="btn4 btn-add" data-block=".block-ambulance"><i class="icon-add"></i><span>Ajouter un déplacement</span></a>
								</div>
							
							</div>
						</div>


						<div class="box2 hide os-10-1 os-10 os-2">
							<h4>Ambulance</h4>
							<div class="text">

								<div class="multiblocks">
									<div class="sub-block">
										<div class="header">
											<h4><span class="number">1</span> - Avion</h4>
										</div>
										<div class="sub-cont">


											<div class="control-group">
												<label><span class="rft">*</span> Montant</label>
												<input type="text" name="a" class="amount"> $
											</div>


											<label class="radiobutton inline">
											   <div class="radiobuttons">
												   	
													<label class="radiobutton">
													   <input type="radio" name="mode73-_N_">
													   <i>Aller simple</i>
													</label>

													<label class="radiobutton">
													   <input type="radio" name="mode73-_N_">
													   <i>Aller-retour</i>
													</label>
												
											   </div>

											</label>

										</div>	
									</div>
								</div>

								<div class="btns3">
									<a href="#" class="btn4 btn-add" data-block=".block-avion"><i class="icon-add"></i><span>Ajouter un déplacement</span></a>
								</div>
							
							</div>
						</div>

						<div class="box2 hide os-11-1 os-11 os-2">
							<h4>Autre moyen de transport</h4>
							<div class="text">

								<div class="multiblocks">
									<div class="sub-block">
										<div class="header">
											<h4><span class="number">1</span> - Autre transport</h4>
										</div>
										<div class="sub-cont">

											<div class="control-group">
												<label><span class="rft">*</span> Precisez</label>
												<input type="text" name="a">
											</div>

											<div class="control-group">
												<label><span class="rft">*</span> Montant</label>
												<input type="text" name="a" class="amount"> $
											</div>

											<label class="radiobutton inline">
											   <div class="radiobuttons">
												   	
													<label class="radiobutton">
													   <input type="radio" name="mode74">
													   <i>Aller simple</i>
													</label>

													<label class="radiobutton">
													   <input type="radio" name="mode74">
													   <i>Aller-retour</i>
													</label>
												
											   </div>

											</label>

										</div>	
									</div>
								</div>

								<div class="btns3">
									<a href="#" class="btn4 btn-add" data-block=".block-autre"><i class="icon-add"></i><span>Ajouter un déplacement</span></a>
								</div>
							
							</div>
						</div>


						<div class="box2 hide os-3-1 os-3">
							<h4>Frais d'hébergement</h4>

							<div class="text">

								<label class="radiobutton required">
								   <i>Type d'hébergement</i>

								   <div class="radiobuttons">
									   	
										<label class="radiobutton">
										   <input type="radio" name="mo" value="create" data-show=".os-5-1" data-hide=".os-5">
										   <i>Hotel</i>
										</label>

										<label class="radiobutton">
										   <input type="radio" name="mo" value="create" data-hide=".os-5">
										   <i>Chez un parent</i>
										</label>

										<label class="radiobutton">
										   <input type="radio" name="mo" value="create" data-hide=".os-5">
										   <i>Chez un ami</i>
										</label>

										
								   </div>
								</label>

								<div class="hide os-5-1 os-5 os-3">
									<div class="control-group">
										<label><span class="rft">*</span> Nombre de nuitées consécutives à cet hotel</label>
										<input type="text" name="a" class="amount">
									</div>

									<div class="control-group">
										<label><span class="rft">*</span> Montant total (taxes incluses)</label>
										<input type="text" name="a" class="amount"> $
										<p class="clarification">Montant total pour votre séjour de 2 nuitées consécutives à cet hotel.</p>
									</div>

									<div class="control-group">
										<label><span class="rft">*</span> Montant total pour allocation (2 nuitées * 5,85)</label>
										<input type="text" name="a" class="amount"> $
									</div>

									<label class="radiobutton required">
									   <i>Emplacement de cet hotel</i>

									   <div class="radiobuttons">
										   	
											<label class="radiobutton">
											   <input type="radio" name="m2">
											   <i>Ville de Montréal</i>
											</label>

											<label class="radiobutton">
											   <input type="radio" name="m2">
											   <i>Laval</i>
											</label>

											<label class="radiobutton">
											   <input type="radio" name="m2">
											   <i>Longueuil</i>
											</label>

											<label class="radiobutton">
											   <input type="radio" name="m2">
											   <i>Ville de Gatineau</i>
											</label>

											<label class="radiobutton">
											   <input type="radio" name="m2">
											   <i>Ville de Québec</i>
											</label>

											<label class="radiobutton">
											   <input type="radio" name="m2">
											   <i>Lac-Beauport</i>
											</label>

											<label class="radiobutton">
											   <input type="radio" name="m2">
											   <i>Lac-Delage</i>
											</label>

											<label class="radiobutton">
											   <input type="radio" name="m2">
											   <i>Ailleurs au Québec</i>
											</label>

											
									   </div>
									</label>


								</div>


							</div>
						</div>



						<div class="box2 hide os-4-1 os-4">
							<div class="text">

								<div class="control-group">
									<label><span class="rft">*</span> Heure de départ (Residence personnelle)</label>
									<input type="text" name="a">
								</div>

								<div class="control-group">
									<label><span class="rft">*</span> Heure d'arrivée (Centro de réadaptation)</label>
									<input type="text" name="a">
								</div>

							</div>
						</div>


						<div class="box2 hide os-4-1 os-4">
							<h4>Repas</h4>
							<div class="text">

								<p class="clarification">(Les montants maximums incluent les pourboires et les taxes.)</p>

								<div class="control-group">
									<label><span class="rft">*</span> Déjeuner (Maximum: 10,40 $)</label>
									<input type="text" name="a" class="amount"> $
									<p class="clarification">Le déjeuner n'est pas remboursable si vous aviez quitté votre résidence après 7h30 le matin.</p>
								</div>

								<div class="control-group">
									<label><span class="rft">*</span> Diner (Maximum: 14,30 $)</label>
									<input type="text" name="a" class="amount"> $
									<p class="clarification">Le diner n'est pas remboursable si vous aviez quitté votre résidence après 11h30 le matin.</p>
									<p class="clarification">Le diner n'est pas remboursable si vous étiez de retour à votre résidence avant 18h30.</p>
								</div>

								<div class="control-group">
									<label><span class="rft">*</span> Souper (Maximum: 21,55 $)</label>
									<input type="text" name="a" class="amount"> $
									<p class="clarification">Le souper n'est pas remboursable si vous étiez de retour à votre résidence avant 18h30.</p>
								</div>


								<label class="radiobutton required">
								   <i>Autre frais de déplacement, de repas ou d'hebergement</i>

								   <div class="radiobuttons">
									   	
										<label class="radiobutton">
										   <input type="radio" name="m28">
										   <i>Meme raison de déplacement (Physiothérapie)</i>
										</label>

										<label class="radiobutton">
										   <input type="radio" name="m28">
										   <i>Autre raison de déplacement</i>
										</label>
										
								   </div>
								</label>

							</div>
						</div>

	
					</div>	


					<div class="btns">
						<a class="btn btn7" href="2-identification.html">Précédent</a>
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


	<div class="hide block-transport">
		<div class="sub-block">
			<div class="header">
				<a class="btn4a btn-delete" href="#"><i class="icon-delete2"></i><span>Supprimer</span></a>
				<h4><span class="number">1</span> - Transport</h4>
			</div>
			<div class="sub-cont">


				<div class="control-group">
					<label><span class="rft">*</span> Montant</label>
					<input type="text" name="a" class="amount"> $
				</div>


				<label class="radiobutton inline">
				   <div class="radiobuttons">
					   	
						<label class="radiobutton">
						   <input type="radio" name="mode70-_N_">
						   <i>Aller simple</i>
						</label>

						<label class="radiobutton">
						   <input type="radio" name="mode70-_N_">
						   <i>Aller-retour</i>
						</label>
					
				   </div>

				</label>

			</div>	
		</div>
	</div>


	<div class="hide block-voiture">

		<div class="sub-block">
			<div class="header">
				<h4><span class="number">1</span> - Voiture</h4>
			</div>
			<div class="sub-cont">


				<div class="control-group">
					<label><span class="rft">*</span> Distance parcourue</label>
					<input type="text" name="a" class="amount"> km
				</div>

				<label class="radiobutton inline">
				   <div class="radiobuttons">
					   	
						<label class="radiobutton">
						   <input type="radio" name="mode60-_N_">
						   <i>Aller simple</i>
						</label>

						<label class="radiobutton">
						   <input type="radio" name="mode60-_N_">
						   <i>Aller-retour</i>
						</label>
					
				   </div>

				</label>
				<br>
				<label class="radiobutton inline required">
					<i>Avez-vous une attestation médicale indiquant votre incapacité à utiliser les transports en commun?</i>
				   <div class="radiobuttons">
					   	
						<label class="radiobutton">
						   <input type="radio" name="mode61-_N_">
						   <i>Oui</i>
						</label>

						<label class="radiobutton">
						   <input type="radio" name="mode61-_N_">
						   <i>Non</i>
						</label>
					
				   </div>

				</label>

				<div class="control-group">
					<label>Frais d'utilisation demandés (525 km x 0.43$)</label>
					<input type="text" name="a" class="amount"> $
					<div class="clarification sp-s">
						<p><strong>Note:</strong></p>
						</p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud.</p>
					</div>
				</div>

				<label class="radiobutton required">
					<i>Lieu de départ</i>
				   <div class="radiobuttons">
					   	
						<label class="radiobutton">
						   <input type="radio" name="mode62-_N_" data-hide=".os-12-_N_">
						   <i>Résidence personnelle</i>
						</label>

						<label class="radiobutton">
						   <input type="radio" name="mode62-_N_" data-hide=".os-12-_N_">
						   <i>Clinique ou hopital</i>
						</label>

						<label class="radiobutton">
						   <input type="radio" name="mode62-_N_" data-show=".os-12-1-_N_" data-hide=".os-12-_N_">
						   <i>Autre</i>

							<div class="control-group os-12-_N_ os-12-1-_N_ hide">
								<label><span class="rft">*</span> Precisez</label>
								<input type="text" name="a">
							</div>
						</label>
					
				   </div>

				</label>

				<label class="radiobutton required">
					<i>Lieu d'arrivé</i>
				   <div class="radiobuttons">
					   	
						<label class="radiobutton">
						   <input type="radio" name="mode63-_N_" data-hide=".os-13-_N_">
						   <i>Résidence personnelle</i>
						</label>

						<label class="radiobutton">
						   <input type="radio" name="mode63-_N_" data-hide=".os-13-_N_">
						   <i>Clinique ou hopital</i>
						</label>

						<label class="radiobutton">
						   <input type="radio" name="mode63-_N_" data-show=".os-13-1-_N_" data-hide=".os-13-_N_">
						   <i>Autre</i>

							<div class="control-group os-13-_N_ os-13-1-_N_ hide">
								<label><span class="rft">*</span> Precisez</label>
								<input type="text" name="a">
							</div>
						</label>
					
				   </div>

				</label>

			</div>	
		</div>

	</div>

	<div class="hide block-taxi">
		
		<div class="sub-block">
			<div class="header">
				<a class="btn4a btn-delete" href="#"><i class="icon-delete2"></i><span>Supprimer</span></a>
				<h4><span class="number">1</span> - Taxi</h4>
			</div>
			<div class="sub-cont">


				<div class="control-group">
					<label><span class="rft">*</span> Montant</label>
					<input type="text" name="a" class="amount"> $
				</div>


				<label class="radiobutton inline">
				   <div class="radiobuttons">
					   	
						<label class="radiobutton">
						   <input type="radio" name="mode71-_N_">
						   <i>Aller simple</i>
						</label>

						<label class="radiobutton">
						   <input type="radio" name="mode71-_N_">
						   <i>Aller-retour</i>
						</label>
					
				   </div>

				</label>

			</div>	
		</div>

	</div>

	<div class="hide block-avion">
		<div class="sub-block">
			<div class="header">
				<a class="btn4a btn-delete" href="#"><i class="icon-delete2"></i><span>Supprimer</span></a>
				<h4><span class="number">1</span> - Avion</h4>
			</div>
			<div class="sub-cont">


				<div class="control-group">
					<label><span class="rft">*</span> Montant</label>
					<input type="text" name="a" class="amount"> $
				</div>


				<label class="radiobutton inline">
				   <div class="radiobuttons">
					   	
						<label class="radiobutton">
						   <input type="radio" name="mode73-_N_">
						   <i>Aller simple</i>
						</label>

						<label class="radiobutton">
						   <input type="radio" name="mode73-_N_">
						   <i>Aller-retour</i>
						</label>
					
				   </div>

				</label>

			</div>	
		</div>

	</div>

	<div class="hide block-ambulance">
		<div class="sub-block">
			<div class="header">
				<a class="btn4a btn-delete" href="#"><i class="icon-delete2"></i><span>Supprimer</span></a>
				<h4><span class="number">1</span> - Ambulance</h4>
			</div>
			<div class="sub-cont">


				<div class="control-group">
					<label><span class="rft">*</span> Montant</label>
					<input type="text" name="a" class="amount"> $
				</div>


				<label class="radiobutton inline">
				   <div class="radiobuttons">
					   	
						<label class="radiobutton">
						   <input type="radio" name="mode72-_N_">
						   <i>Aller simple</i>
						</label>

						<label class="radiobutton">
						   <input type="radio" name="mode72-_N_">
						   <i>Aller-retour</i>
						</label>
					
				   </div>

				</label>

			</div>	
		</div>

	</div>

	<div class="hide block-autre">
		<div class="sub-block">
			<div class="header">
				<a class="btn4a btn-delete" href="#"><i class="icon-delete2"></i><span>Supprimer</span></a>
				<h4><span class="number">1</span> - Autre transport</h4>
			</div>
			<div class="sub-cont">

				<div class="control-group">
					<label><span class="rft">*</span> Precisez</label>
					<input type="text" name="a">
				</div>

				<div class="control-group">
					<label><span class="rft">*</span> Montant</label>
					<input type="text" name="a" class="amount"> $
				</div>

				<label class="radiobutton inline">
				   <div class="radiobuttons">
					   	
						<label class="radiobutton">
						   <input type="radio" name="mode74-_N_">
						   <i>Aller simple</i>
						</label>

						<label class="radiobutton">
						   <input type="radio" name="mode74-_N_">
						   <i>Aller-retour</i>
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