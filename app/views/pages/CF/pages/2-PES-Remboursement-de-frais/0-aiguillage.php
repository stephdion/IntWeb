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

		<div class="strong">

			<div class="mcl2">

				<div class="form-cont">
					<div class="header">
						<h3>Renseignements sur votre dossier</h3>
					</div>

					<div class="content">
						
						<div class="text sp-s">
							<p><span class="rft">*</span> Obligatoire</p>
						</div>

						   	
							<label class="radiobutton">
							   <input data-hide=".os-1" data-show=".os-1-1" type="radio" name="mode">
							   <i>Demande de remboursement de frais de déplacements, d'hébergement, de repas.</i>
							</label>

							<label class="radiobutton">
							   <input data-hide=".os-1" data-show=".os-1-2" type="radio" name="mode">
							   <i>Demande de remboursement de frais de médicaments, de vêtements ou autre frais.</i>
							</label>

							<label class="radiobutton">
							   <input data-hide=".os-1" data-show=".os-1-3" type="radio" name="mode">
							   <i>Récupérer une demande de remboursement de frais déjà débuté (c'est un brouillon)</i>
							</label>

							<div class="box2 hide os-1 os-1-3">
								<div class="text">
									<p class="note"><strong>Note:</strong> Vous devez avoir votre code de récupération et votre adresse courriel.</p>
								</div>
							</div>
							

						<br>	
						<div class="btns3">
							<a class="btn btn3 hide os-1 os-1-1 os-1-2" href="1-avant-de-debuter.html">Accéder au service</a>
							<a class="btn btn3 hide os-1 os-1-3" href="1-avant-de-debuter.html">Récupérer un brouillon</a>
						</div>
					</div>
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