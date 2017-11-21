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
			<h1>Demande de copie de dossier</h1>
		</div>
	</header>

	<section class="container">

		<ul class="nav nav-wizard">
			<li class="completed"><a href="#"><i>1</i></a></li>
			<li class="active"><a href="#"><i>2</i><span>Informations pour l'expédition</span></a></li>
			<li><a href="#"><i>3</i></a></li>
		</ul>

		<div class="strong">
			<div class="mcl2">

				<div class="step-info">
					<p class="number">2</p>
					<h2>Informations pour l'expédition</h2>
				</div>

				<div class="infobox5 sp-xl">
					<p>Les coordonnées affichées sont utilisées pour l'expédition. Vous pouvez les modifier, si vous désirez que l'on vous expédie la copie à une autre adresse.</p>
				</div>

				<div class="form-cont sp-xl">

					<div class="content">
						<div class="text sp-s">
							<p><span class="rft">*</span> Obligatoire</p>
						</div>


						<div class="box2">

							<h4>Mode d'expédition</h4>

							<div class="text">
							   	
								<label class="radiobutton required inline">
									<i>Choisir le mode d'expédition de la copie de dossier?</i>
								   <div class="radiobuttons">
									   	
										<label class="radiobutton">
										   <input type="radio" name="rb1" data-hide="#os-1-2">
										   <i>Par service postal</i>
										</label>

										<label class="radiobutton">
										   <input type="radio" name="rb1" data-show="#os-1-2">
										   <i>Par télécopie</i>
										</label>
									
								   </div>

								   <div class="sp-s note hide" id="os-1-2">
								   		<p><strong>Note:</strong>Si la copie de dossier contient plus de 50 pages, elle vous sera envoyée par la poste. Des coordonnées postales sont donc nécessaires.</p>
								   </div>

								</label>

							</div>
						</div>


						<div class="box2 os-2">

							<h4>Coordonnées du destinataire</h4>

							<div class="text">

								<div class="control-group">
									<label>Prénom, nom du destinataire</label>
									<p>Jean-Pierre Bertrand</p>
								</div>

								<div class="control-group">
									<label>Adresse</label>
									<p>345 rue de la Falaise</p>
									<p>Québec (Québec)</p>
									<p>G1K 7E2</p>
								</div>

								<div class="control-group">
									<label>Téléphone</label>
									<p>418-654-5432</p>
								</div>

								<div class="control-group">
									<label>Télécopieur</label>
									<p>418-654-5433</p>
								</div>

							   	<a class="sp-s btn4a" href="javascript:void(0)" data-hide=".os-2" data-show="#os-2-1">Modifier les coordonnées</a>

							</div>
						</div>


						<div class="box2 hide os-2" id="os-2-1">

							<h4>Coordonnées du destinataire</h4>

							<div class="text">

								<div class="control-group">
									<label><span class="rft">*</span> Nom du destinataire</label>
									<input type="text" name="nom">
								</div>

								<div class="control-group">
									<label><span class="rft">*</span> Prénom du destinataire</label>
									<input type="text" name="nom">
								</div>

								<div class="control-group">
									<label><span class="rft">*</span> Rue</label>
									<input type="text" name="nom">
								</div>

								<div class="control-group">
									<label><span class="rft">*</span> Ville</label>
									<input type="text" name="nom">
								</div>

								<div class="control-group">
									<label><span class="rft">*</span> Province</label>
									<input type="text" name="nom">
								</div>

								<div class="control-group">
									<label><span class="rft">*</span> Code Postal</label>
									<input type="text" name="nom">
								</div>

								<div class="control-group">
									<label><span class="rft">*</span> Téléphone</label>
									<input type="text" name="nom">
									<p class="clarification">999 999-9999</p>
								</div>

								<div class="control-group">
									<label>Poste</label>
									<input type="text" name="nom">
								</div>

								<div class="control-group">
									<label><span class="rft">*</span> Télécopieur</label>
									<input type="text" name="nom">
									<p class="clarification">999 999-9999</p>
								</div>

							</div>
						</div>


	
					</div>	


					<div class="btns">
						<a class="btn btn7" href="1-informations-sur-la-demande.php">Précédent</a>
						<a class="btn btn3" href="3-resume.html">Suivant</a>
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