<!DOCTYPE html>
<html>
	<head>
		
		<?php include('head.php'); ?>

		<link rel="stylesheet" href="css/accueil.css" />
		<link href="media/fonts/fontTemplateSkill.css" rel="stylesheet">
        <link href="media/fonts/fontTemplateSkill2.css" rel="stylesheet">

		<title>Portfolio Andréa BIGOT </title>
	</head>
	<body>

		<!--header-->
		<?php include('header.php'); ?>
		
		
		<!--menu-->
        <?php include('nav.php'); ?>

		<!--bloc  image à propos-->
		<div class="bgimg-2" id="moi" >
		
			<div id="scrollTop">
				<a href="#top"> <img src="media/top2.png" alt="Haut de page" title="Haut de page"> </a>
			</div> 
			<div class="identity">
				<div class="row">
					<div class="col-sm-6">
						<div class="card">
							<div class="card-body">
								<p class="card-text">Je m’appelle Andréa BIGOT et je suis actuellement en deuxième année de BTS SIO (Services Informatiques aux Organisation). 
									L’informatique est un domaine très vaste qui m’intrigue énormément. 
									C’est pourquoi j’ai choisi cette formation qui me permettra d’acquérir des compétences et savoir-faire solides afin de réaliser mes projets professionnels et personnels.</p>
								
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title"><img src="media/logoSite3.png" alt="logo" class="col col-md col-sm"></h5>
								<ul class="list-group">
									<li class="list-group-item"><h1 class="col col-md col-sm"> Andréa BIGOT </h1></li>
									<li class="list-group-item"><a href="www.linkedin.com/in/andréa-bigot-10725a1b6">LinkedIn</a></li>
									<li class="list-group-item"><a href="https://github.com/AndreaBIGOT">Github</a></li>
									<li class="list-group-item"><a href="#">Fiverr</a></li> 
									<li class="list-group-item"><a href="media/CV.pdf"><input type="submit" value="Voir mon CV" class="btn btn-outline-primary"></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		

		<!--bloc image compétences-->
		<div class="bgimg-3" id="skill">
			<div class="caption">
		    	<span class="border competences" style="font-size: 36px; color: #f7f7f7;">Mes compétences</span>
			</div>
		</div>

			<div style="position:relative;">
				<div id="about" class="competence">
				

					<div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <div class="icon">
                            <img src="media/prog.png" alt="programmation">
                        </div>
                        <h4>Programmation</h4>
                        <div class="line-dec"></div>
                        <p style="font-size: 16px;"> JAVA <br>PHP <br>MySQL <br>HTML<br> CSS <br>Twig</p> 
                        
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <div class="icon">
                            <img src="media/tool1.png" alt="outil">
                        </div>
                        <h4>Outils</h4>
                        <div class="line-dec"></div>
                        <p style="font-size: 16px;">Symfony <br>Responsive design <br> Photoshop <br> Visual Studio Code  <br>  Android Studio <br> Validation W3C <br> API REST</p> 
                        
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <div class="icon">
                            <img src="media/langue.png" alt="langue" style="width: 60px;">
                        </div>
                        <h4>Langues</h4>
                        <div class="line-dec"></div>
                        <p style="font-size: 16px;">Anglais: niveau B2  <br>  Français: langue maternelle <br>  Espagnol: les bases  <br> Créole réunionnais: langue maternelle</p>
                        
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <div class="icon">
                            <img src="media/woman.png" alt="woman" style="width: 60px;">
                        </div>
                        <h4>Qualités</h4>
                        <div class="line-dec"></div>
                        <p style="font-size: 16px;">A l'écoute   <br> Perfectionniste  <br>  Motivée <br>  Travailleuse</p>  
                    </div>
                </div>
            </div>
        </div>

			  </div>
			</div>

		<!--bloc image réalisations-->
		<div class="bgimg-4" id="real">
		 	<div class="caption">
		    	<span class="border realisation" style="font-size: 36px; color: #f7f7f7;">Mes réalisations</span>
			</div>
		</div>

		<!--bloc des réalisations-->
		<div class="real">
			<!--BIRAUTO-->
			<div class="bloc-img img1 col">
				<a href="file:///E:/Birauto/contact.html">	
				    <div class="overlay">
	       				<div class="text">Birauto <br/>Projet scolaire <br/> HTML/CSS <br/> Réalisation de page contact <br>et renseignements  
	       				</div>
	  				</div>
	  			</a>
	  		</div>

			<!--S&D-->
	  		<div class="bloc-img img2 col">
			  	<a href="#" title="Site bientôt disponible !">
				    <div class="overlay">
		       			<div class="text">Sweet and Delicious <br/> Projet personnel <br/> HTML/CSS/PHP <br/> Création de mon site de pâtisserie  
		       			</div>
	  				</div>
	  			</a>
            </div>
            
            <!--Cour'ag-->
			<div class="bloc-img img3 col">
				<a href="#" title="Site bientôt disponible !">
				    <div class="overlay">
	       				<div class="text">Cour'ag <br/>Projet personnel <br/> HTML/CSS/PHP <br/> Création d'un site de présentation de <br>mon association sportive  
	       				</div>
	  				</div>
	  			</a>
              </div>
              
              <!--MY COOKIES 974-->
			<div class="bloc-img img4 col">
				<a href="#" title="Site bientôt disponible !">	
				    <div class="overlay">
	       				<div class="text">My Cookies 974 <br/>Projet personnel <br/> HTML/CSS/PHP <br/> Réalisation d'un site pour une <br> entreprise de vente en ligne  
	       				</div>
	  				</div>
	  			</a>
              </div>
              
              <!--LE POIVRIER-->
			<div class="bloc-img img5 col">
				<a href="http://83.198.215.203/poivrier/">	
				    <div class="overlay">
	       				<div class="text">Le Poivrier <br/>Projet d'entraînement <br/> HTML/CSS/PHP <br/> Réalisation d'un site de restauration <br> en ligne  
	       				</div>
	  				</div>
	  			</a>
	  		</div>
			    <!--STAGE-->
			<div class="bloc-img img5 col">
				<a href="http://83.198.215.203/poivrier/">	
				    <div class="overlay">
	       				<div class="text">Simplification de Dolibarr <br/>Projet de stage <br/> Symfony/API REST/PHP/Tiwg <br/> Simplification des interfaces client  <br>et produit de Dolibarr <br> (ajouter/modifier/supprimer)  
	       				</div>
	  				</div>
	  			</a>
	  		</div>
        </div>
        
        <!--bloc image service-->
		<div class="bgimg-3" id="service">
			<div class="caption">
		    	<span class="border" style="font-size: 36px;color: #f7f7f7;">Mes services</span>
			</div>
		</div>

			<div style="position:relative;">
                <div style="color:#ddd;background-color:rgb(239, 239, 239);padding:50px 10px;text-align: justify;">
					
					<div class="blocService">
						
						<div class="service siteVitrine">
							<h3>Création de site vitrine</h3>
							<h5>Developpé sur mesure (codage à la main)</h5>
							<hr>
							
							<ul>
								<li>HTML CSS PHP</li>
								<li>Mise en place du contenu (images, vidéos, logo...)</li>
								<li>2 à 3 pages max</li>
								<li>Site responsive (adapté tous supports)</li>
								<li>Liens de partage sur les réseaux sociaux</li>
								<li>Respect des normes W3C</li>
								<li>Aide pour la mise en ligne et l'hébergement</li>
							</ul>
							<hr>
							<p>Fonctionnalités au choix:</p>
							<ul>
								<li>Système de recherche</li>
								<li>Formulaire de contact</li>
								<li>Système de connexion/inscription</li>
								<li>Pagination</li>
							</ul>
						</div>

						<div class="service refonte">
							<h3>Refonte de votre site</h3>
							<h5>Developpé sur mesure (codage à la main)</h5>
							<hr>
							
							<ul>
								<li>HTML CSS PHP</li>
								<li>Refonte graphique</li>
								<li>Améliorations</li>
								<li>Ajout de fonctionnalités</li>
								<li>Cahier des charges sur mesure (ou le votre)</li>
							</ul>
							<hr class="hr2">
							<p>Fonctionnalités au choix:</p>
							<ul>
								<li>Système de recherche</li>
								<li>Formulaire de contact</li>
								<li>Système de connexion/inscription</li>
								<li>Pagination</li>
							</ul>
						</div> 
					</div>	
                </div>
            </div>

	<!--bloc image contact-->
		<div class="bgimg-5" id="contact">
			<div class="caption">
		    	<span class="borderContact">Contactez-moi</span> 
			</div>
		</div>

		<div style="position:relative;" class="contenuContact">
			<div style="color:#ddd;background-color:rgb(239, 239, 239);text-align:center;padding:50px 80px 10px 80px;text-align: justify;" class="contact">

				<?php

					require('connexionBDD.php');

					if (isset($_POST['submit'])) {
						if (isset($_POST['nom']) && isset($_POST['mail']) && isset($_POST['objet']) && isset($_POST['message'])) {

							$req="INSERT INTO contact(nom, mail, objet, message) VALUES(?,?,?,?)";
							$insert= $conn->prepare($req);
							$insert->execute([ $_POST['nom'],$_POST['mail'], $_POST['objet'],$_POST['message'] ]);
							
							

							if($insert == true){
								$msg= "Votre message a bien été envoyé.";
							}

							else{
								$msg= "Erreur lors de l'envoi du message. Veuillez réessayer.";
							}
						}
					}
				?>




				<!--formulaire-->
				<form method="POST">
					<div class="form-group">
						<label for="exampleInputEmail1" style="color: black;">Nom</label>
						<input type="text" class="form-control col" id="exampleInputEmail1" aria-describedby="emailHelp"  placeholder="Nom" name="nom">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1" style="color: black;">Adresse mail</label>
						<input type="email" class="form-control col" id="exampleInputEmail1" placeholder="exemple@gmailcom" name="mail">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1" style="color: black;">Objet</label>
						<input type="text" class="form-control col" id="exampleInputEmail1" aria-describedby="emailHelp" size="30" maxlength="15" placeholder="Objet" name="objet">
					</div>
					<div class="form-group">
						<label for="exampleFormControlTextarea1" style="color: black;">Message</label>
						<textarea class="form-control col" id="exampleFormControlTextarea1" rows="3" placeholder="Votre message" name="message"></textarea>
					</div>

					<button type="submit" class="btn btn-primary" style="background-color: #76cbcc;border-color: #76cbcc;" name="submit">Envoyer</button>
				</form>
				
				<?php     
					if(isset($msg)){
						echo "<p style='margin-left:0;'>".$msg."</p>";
					}
				?>



		    	<p class="mail">andrea.bigot974@gmail.com</p><br/>
				
				
				<!-- footer -->
				<?php include('footer.php'); ?>
				
			</div>
		</div>

		<!-- Javascript à la fin pour pas ralentir le temps de réponse d'affichage chez le client (tout sera chargé d'abbord en haut) -->
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>

</body>
</html>





