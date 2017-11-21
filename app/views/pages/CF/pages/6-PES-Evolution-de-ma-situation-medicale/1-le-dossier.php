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
			<li class="active"><a href="#"><i>1</i><span>Le dossier</span></a></li>
			<li><a href="#"><i>2</i></a></li>
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
					<p class="number">1</p>
					<h2>Le dossier</h2>
				</div>

				<div class="form-cont sp-xl">

					<div class="content">
						<div class="text sp-s">
							<p><span class="rft">*</span> Obligatoire</p>
						</div>


						<div class="box2">

							<h4>Renseignements sur vous</h4>

							<div class="text">

								<div class="control-group">
									<label>Prénom, nom</label>
									<p>Jean-Pierre Bertrand</p>
								</div>

							</div>
						</div>



						<div class="box2">
							<div class="text">


								<label class="radiobutton required">
									<i>Numéro du dossier à la CNESST</i>
								   <div class="radiobuttons">
										<label class="radiobutton">
										   <input type="radio" name="rb1" data-hide=".os-1" data-show=".os-1-1">
										   <i>9 5678 345 6</i>
										</label>

										<label class="radiobutton hide os-1 os-1-1">
											<i><span class="rft">*</span> Date de l'événement pour laquelle vous signalez l'évolution de votre situation</i>
										   <div class="radiobuttons">
												<label class="radiobutton">
												   <input type="radio" name="rb2">
												   <i>2016-12-05 (Rechute, récidive ou aggravation)</i>
												</label>

												<label class="radiobutton">
												   <input type="radio" name="rb2">
												   <i>2016-10-24 (Rechute, récidive ou aggravation)</i>
												</label>

												<label class="radiobutton">
												   <input type="radio" name="rb2">
												   <i>2016-03-17 (Rechute, récidive ou aggravation)</i>
												</label>

												<label class="radiobutton">
												   <input type="radio" name="rb2">
												   <i>2016-11-01 (Événement d'origine)</i>
												</label>
											</div>
										</label>


										<label class="radiobutton">
										   <input type="radio" name="rb1" data-hide=".os-1" data-show=".os-1-2">
										   <i>6 5432 198 7</i>
										</label>

										<label class="radiobutton hide os-1 os-1-2">
											<i><span class="rft">*</span> Date de l'événement pour laquelle vous signalez l'évolution de votre situation</i>
										   <div class="radiobuttons">
												<label class="radiobutton">
												   <input type="radio" name="rb3">
												   <i>2016-12-05 (Rechute, récidive ou aggravation)</i>
												</label>

												<label class="radiobutton">
												   <input type="radio" name="rb3">
												   <i>2016-10-24 (Rechute, récidive ou aggravation)</i>
												</label>

												<label class="radiobutton">
												   <input type="radio" name="rb3">
												   <i>2016-03-17 (Rechute, récidive ou aggravation)</i>
												</label>

												<label class="radiobutton">
												   <input type="radio" name="rb3">
												   <i>2016-11-01 (Événement d'origine)</i>
												</label>
											</div>
										</label>

									</div>
								</label>


							</div>
						</div>

	
					</div>	


					<div class="btns">
						<a class="btn btn7" href="0-avant-de-debuter.html">Précédent</a>
						<a class="btn btn3" href="2-les-visites-medicales.html">Suivant</a>
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