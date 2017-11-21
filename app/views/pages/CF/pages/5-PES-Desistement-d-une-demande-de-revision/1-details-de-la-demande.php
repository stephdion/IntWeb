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
			<h1>DÉSISTEMENT D'UNE DEMANDE DE RÉVISION</h1>
		</div>
	</header>

	<section class="container">

		<ul class="nav nav-wizard">
			<li class="active"><a href="#"><i>1</i><span>Détails de la demande</span></a></li>
			<li><a href="#"><i>2</i></a></li>
		</ul>

		<div class="strong">
			<div class="mcl2">

				<div class="step-info">
					<p class="number">1</p>
					<h2>Détails de la demande</h2>
				</div>

				<div class="form-cont sp-xl">

					<div class="content">
						<div class="text sp-s">
							<p><span class="rft">*</span> Obligatoire</p>
						</div>


						<div class="box2">
							<h4>Demande de révision à annuler</h4>

							<div class="text">
								<div class="control-group">
									<label>Numéro de la demande de révision à annuler</label>
									<input type="text" name="numero">
									<p class="clarification">R-999999999999</p>
								</div>
							</div>
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

							<h4>Renseignements sur votre représentant</h4>

							<div class="text">
							   	
								<label class="radiobutton required inline">
									<i>Est-ce que quelqu'un vous représentait dans le cadre de cette demande de révision?</i>
								   <div class="radiobuttons">
									   	
										<label class="radiobutton">
										   <input type="radio" name="rb1" data-hide="#os-1-2">
										   <i>Oui</i>
										</label>

										<label class="radiobutton">
										   <input type="radio" name="rb1" data-show="#os-1-2">
										   <i>Non</i>
										</label>
									
								   </div>

								</label>

								<div class="hide sp-s" id="os-1-2">
							   	
									<label class="radiobutton required inline">
										<i>Titre de civilité</i>
									   <div class="radiobuttons">
										   	
											<label class="radiobutton">
											   <input type="radio" name="rb2">
											   <i>Féminin</i>
											</label>

											<label class="radiobutton">
											   <input type="radio" name="rb2">
											   <i>Masculin</i>
											</label>
										
									   </div>

									</label>

									<div class="control-group">
										<label><span class="rft">*</span> Nom</label>
										<input type="text" name="nom">
									</div>

									<div class="control-group">
										<label><span class="rft">*</span> Prénom</label>
										<input type="text" name="nom">
									</div>

									<div class="control-group">
										<label><span class="rft">*</span> Nom de la compagnie, de la firme ou du syndicat ​​​​​​​</label>
										<input type="text" name="nom">
									</div>

									<div class="control-group">
										<label><span class="rft">*</span> Fonction​​​​​​​</label>
										<input type="text" name="nom">
									</div>

									<div class="control-group">
										<label><span class="rft">*</span> Téléphone principal</label>
										<input type="text" name="nom">
										<p class="clarification">999 999-9999</p>
									</div>

									<div class="control-group">
										<label>Poste</label>
										<input type="text" name="nom">
									</div>

									<div class="control-group">
										<label><span class="rft">*</span> Téléphone secondaire</label>
										<input type="text" name="nom">
										<p class="clarification">999 999-9999</p>
									</div>

									<div class="control-group">
										<label>Poste</label>
										<input type="text" name="nom">
									</div>


								</div>

							</div>
						</div>

	
					</div>	


					<div class="btns">
						<a class="btn btn7" href="0-avant-de-debuter.html">Précédent</a>
						<a class="btn btn3" href="2-resume.html">Suivant</a>
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