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
			<li class="active"><a href="#"><i>6</i><span>Intervention chirurgicale</span></a></li>
			<li><a href="#"><i>7</i></a></li>
			<li><a href="#"><i>8</i></a></li>
		</ul>

		<div class="strong">
			<div class="mcl2">

				<div class="step-info">
					<p class="number">6</p>
					<h2>Intervention chirurgicale</h2>
				</div>

				<div class="form-cont sp-xl">

					<div class="content">

						<div class="text sp-s">
							<p><span class="rft">*</span> Obligatoire</p>
						</div>


						<div class="box2">
							<h4>Intervention chirurgicale</h4>

							<div class="text">

								<label class="radiobutton required inline">
								   <i>Quelle situation s'applique à vous?</i>
								   <div class="radiobuttons">
									   	
										<label class="radiobutton">
										   <input data-hide=".os-1" type="radio" name="mode2">
										   <i>Je n'ai pas d'intervention chirurgicale de prévue.</i>
										</label>

										<label class="radiobutton">
										   <input data-hide=".os-1" data-show=".os-1-2" type="radio" name="mode2">
										   <i>J'ai une intervention chirurgicale de prévue.</i>
										</label>

										<label class="radiobutton">
										   <input data-hide=".os-1" data-show=".os-1-3" type="radio" name="mode2">
										   <i>L'intervention chirurgicale n'est plus requise.</i>
										</label>
									
								   </div>

								</label>

							</div>

						</div>

						<div class="box2 hide os-1 os-1-2">
							<h4>Informations sur votre intervention chirurgicale</h4>

							<div class="text">

								<div class="control-group">
									<label><span class="rft">*</span> Quel est le motif de l'intervention</label>
									<textarea data-characters="250"></textarea>
									<p class="clarification">(250 caractères au maximum)</p>
								</div>

								<label class="radiobutton required inline">
								   <i>Connaissez-vous la date prévue de votre intervention chirurgicale?</i>
								   <div class="radiobuttons">
									   	
										<label class="radiobutton">
										   <input data-hide=".os-2" data-show=".os-2-1" type="radio" name="mode3">
										   <i>Oui</i>
										</label>

										<label class="radiobutton">
										   <input data-hide=".os-2" data-show=".os-2-2" type="radio" name="mode3">
										   <i>Non</i>
										</label>

								   </div>

								</label>

								<div class="hide os-2 os-2-1">

									<div class="control-group">
										<label>Date prévue de votre intervention chirurgicale</label>
										<div class="date-icon">
											<input type="text" name="date1" class="datepicker form-control" value="">
										</div>
									</div>

									<div class="control-group">
										<label>Nom de l'établissement de santé</label>
										<input type="text" name="n">
									</div>

									<div class="control-group">
										<label>Nom du chirurgien</label>
										<input type="text" name="n">
									</div>

								</div>


								<div class="hide os-2 os-2-2">

									<label class="radiobutton required inline">
									   <i>Êtes-vous inscrit sur une liste d'attente pour votre chirurgie?</i>
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

								</div>


								<div class="hide os-3 os-3-1">

									<div class="control-group">
										<label>Date d'inscription sur la liste</label>
										<div class="date-icon">
											<input type="text" name="date1" class="datepicker form-control" value="">
										</div>
									</div>

								</div>

							</div>

						</div>


						<div class="box2 hide os-1 os-1-3">
							<h4>Informations sur votre intervention chirurgicale</h4>

							<div class="text">

								<div class="control-group">
									<label><span class="rft">*</span> Expliquez la raison pour laquelle l'intervention n'est plus requise</label>
									<textarea data-characters="250"></textarea>
									<p class="clarification">(250 caractères au maximum)</p>
								</div>
								
							</div>

						</div>

					</div>	
					<div class="btns">
						<a class="btn btn7" href="5-les-traitements.html">Précédent</a>
						<a class="btn btn3" href="7-ma-capacite-a-travailler.html">Suivant</a>
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