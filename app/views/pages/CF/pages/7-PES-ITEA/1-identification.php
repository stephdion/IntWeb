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
			<li class="active"><a href="#"><i>1</i><span>Identification</span></a></li>
			<li><a href="#"><i>2</i></a></li>
			<li><a href="#"><i>3</i></a></li>
			<li><a href="#"><i>4</i></a></li>
			<li><a href="#"><i>5</i></a></li>
		</ul>

		<div class="strong">
			<div class="mcl2">

				<div class="step-info">
					<p class="number">1</p>
					<h2>Identification</h2>
				</div>

				<div class="infobox5 sp-s">
					<p>Les renseignements ci-dessous que vous aviez déjà fournis ont été récupérés pour faciliter votre déclaration. </p>
				</div>

				<div class="form-cont sp-xl">

					<div class="content">

						<div class="box2">
							<h4>Renseignements sur vous</h4>
							<div class="text">
								<p>Pour modifier les informations ci-dessous, vous devez vous rendre dans la section Mon profil de Mon espace travailleur.</p>
								<br>
								<p><strong>Prénom,nom :</strong> Mme Fabienne Tremblay</p>
								<br>
								<p><strong>Numéro d'assurance maladie:</strong> PELP00510111</p>
								<br>
								<p><strong>Téléphone principal:</strong> (418) 266-4646</p>
								<br>
								<p><strong>Téléphone secondaire:</strong> (418) 266-4646</p>
								<br>
								<p><strong>Adresse courriel:</strong> fabienne.tremblay@test.com</p>
							</div>
						</div>

						<div class="box2">
							<h4>Numéro de dossier</h4>
							<div class="text">
								<div class="control-group">
									<label><span class="rft">*</span>Numéro de dossier à la CNESST -Programme Pour une maternité sans danger</label>
									<p class="clarification">Ce numéro apparaît en haut de la lettre que vous avez reçue de la CNESST.</p>
									<input type="text" name="montant" class="amount" data-characters="9">
									<p class="clarification">9 chiffres</p>
								</div>
							</div>
						</div>

						<div class="box2">
							<h4>Type de demande</h4>
							<div class="text">
								<label class="radiobutton required">
								   <i>Cochez votre situation</i>
								   <div class="radiobuttons">
									   	
										<label class="radiobutton">
										   <input type="radio" name="mode3" data-hide=".os-1">
										   <i>Travailleuse enceinte</i>
										</label>

										<label class="radiobutton">
										   <input type="radio" name="mode3" data-show=".os-1-1" data-hide=".os-1">
										   <i>Travailleuse qui allaite</i>
										</label>
										
								   </div>
								</label>
							</div>
						</div>

						<div class="box2 hide os-1 os-1-1">
							<h4>RQAP</h4>
							<div class="text">
								<label class="radiobutton required">
								   <i>Est-ce que vous recevez des prestations du Régime québécois d'assurance parentale (RQAP)?</i>
								   <div class="radiobuttons">
									   	
										<label class="radiobutton">
										   <input type="radio" name="mode4" data-show=".os-2-1" data-hide=".os-2">
										   <i>Oui</i>
										</label>

										<label class="radiobutton">
										   <input type="radio" name="mode4" data-hide=".os-2">
										   <i>Non</i>
										</label>
										
								   </div>
								</label>

								<div class="hide os-1 os-2 os-2-1">
									<div class="control-group">
										<label><span class="rft">*</span> Date prévue de fin de ces prestations</label>
										<div class="date-icon">
											<input type="text" name="date0" class="datepicker" value="">
										</div>
									</div>
								</div>
							</div>
						</div>



					</div>


					<div class="btns">
						<a class="btn btn7" href="0-avant-de-debuter.html">Précédent</a>
						<a class="btn btn3" href="2-renseignements-sur-votre-situation-professionnelle.html">Suivant</a>
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