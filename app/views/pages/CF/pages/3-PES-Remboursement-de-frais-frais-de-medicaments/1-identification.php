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
			<li class="active"><a href="#"><i>1</i><span>Identification</span></a></li>
			<li><a href="#"><i>2</i></a></li>
			<li><a href="#"><i>3</i></a></li>
			<li><a href="#"><i>4</i></a></li>
			<li><a href="#"><i>5</i></a></li>
			<li><a href="#"><i>6</i></a></li>
		</ul>

		<div class="strong">
			<div class="mcl2">

				<div class="step-info">
					<p class="number">1</p>
					<h2>Identification</h2>
				</div>

				<div class="form-cont sp-xl">

					<div class="content">
						<div class="text sp-s">
							<p><span class="rft">*</span> Obligatoire</p>
						</div>

						<div class="box2">
							<h4>Renseignements sur vous</h4>
							<div class="text">
								<p><strong>Prénom,nom :</strong>Jean-Pierre Bertrand</p>
							</div>
						</div>

						<div class="box2">
							<h4>Événements</h4>
							<div class="text">
								<p><strong>Numéro de dossier à la CNESST</strong>9 5678 345 6</p>
								<br>
								<p><strong>Date de l'événement pour laquelle les frais sont demandés</strong>2016-12-05 (Rechute, récidive ou aggravation)</p>
							</div>
						</div>

						<div class="box2">
							<h4>Accompagnateur</h4>

							<div class="text">

								<label class="radiobutton required inline">
								   <i>Avez-vous des frais liés à la présence d'une personne qui vous a accompagné?</i>

								   <div class="radiobuttons">
									   	
										<label class="radiobutton">
										   <input type="radio" name="mode3" data-show=".os-1-1" data-hide=".os-1">
										   <i>Oui</i>
										</label>

										<label class="radiobutton">
										   <input type="radio" name="mode3" data-hide=".os-1">
										   <i>Non</i>
										</label>
										
								   </div>

								</label>

								<p class="note hide os-1 os-1-1"><strong>Note:</strong>Vous devez avoir une ordonnance médicale autorisant l'accompagnateur.</p>

							</div>
							
						</div>

						<div class="box2 hide os-1 os-1-1">
							<h4>Renseignements sur l'accompagnateur</h4>

							<div class="text">

								<label class="radiobutton required inline">
								   <i>Sexe</i>

								   <div class="radiobuttons">
									   	
										<label class="radiobutton">
										   <input type="radio" name="mode" value="create">
										   <i>Féminin</i>
										</label>

										<label class="radiobutton">
										   <input type="radio" name="mode" value="create">
										   <i>Masculin</i>
										</label>
										
								   </div>
								</label>

								<div class="control-group">
									<label><span class="rft">*</span>Nom</label>
									<input type="text" name="montant">
								</div>

								<div class="control-group">
									<label><span class="rft">*</span> Prénom </label>
									<input type="text" name="montant">
								</div>

							</div>
						
						</div>

						<div class="box2 hide os-1 os-1-1">
							<h4>Coordonnées de l'accompagnateur</h4>

							<div class="text">

								<div class="control-group">
									<label><span class="rft">*</span> Adresse  </label>
									<input type="text" name="montant">
								</div>

								<div class="control-group">
									<label><span class="rft">*</span> Ville  </label>
									<input type="text" name="montant">
								</div>

								<div class="control-group">
									<label><span class="rft">*</span> Province  </label>
									<input type="text" name="montant">
								</div>

								<div class="control-group">
									<label><span class="rft">*</span> Code postal  </label>
									<input type="text" name="montant">
								</div>

								<div class="control-group">
									<label><span class="rft">*</span> Téléphone principal </label>
									<input type="tel" name="tel">
									<p class="clarification">(xxx) xxx-xxxx</p>
								</div>

								<div class="control-group">
									<label>Téléphone secondaire</label>
									<input type="tel" name="tel">
									<p class="clarification">(xxx) xxx-xxxx</p>
								</div>

							</div>

						</div>
						
					</div>	

					<div class="btns">
						<a class="btn btn7" href="0-avant-de-debuter.html">Précédent</a>
						<a class="btn btn3" href="2-medicaments.html">Suivant</a>
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