<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('head.php'); ?>
    <link rel="stylesheet" href="css/veille.css" />
    <link rel="stylesheet" href="css/accueil.css" />
    <link href="media/fonts/fontTemplateSkill.css" rel="stylesheet">
    <link href="media/fonts/fontTemplateSkill2.css" rel="stylesheet">

    <title>L'épreuve E4</title>
</head>

<body>

    <!--header-->
    <?php include('header.php'); ?>


    <nav class="navbar navbar-expand-md navbar-light bg-light">
		<a class="navbar-brand" href="#" style="color:black;"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse menu" id="navbarNavDropdown" style="border: none;">
			<ul class="navbar-nav">

                <li class="nav-item">
					<a class="nav-link" href="index.php">Accueil</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="veilleTechno1.php">Veille technologique</a>
				</li>
                <li class="nav-item">
					<a class="nav-link" href="veilleJuriSujet1.php">Veille juridique</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Epreuves BTS SIO
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="E4.php">E4</a>
						<a class="dropdown-item" href="E6.php">E6</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="stage.php">Stage</a>
				</li>
			</ul>
		</div>
	</nav>

    <!--bloc veille-->
    <div class="bgimg-2">
        <div class="identity" style="max-width: 700px!important;">
            <div class="row">
                <div class="col-sm-6" style="flex: 0px!important;  max-width: 100%!important;">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">L’épreuve E4 consiste à évaluer les compétences du candidat à partir de ses deux situations professionnelles. <br> 
                            En SLAM, nous devons créer soit un site WEB, soit une application mobile ou une application de bureau. <br>
                            Les compétences évaluées :
                            <ul style="font-size: 22px;text-align: center;margin-top: 0px; color: black; margin-top: 34px;margin-left:0!important;">
                                <li>- Produire ou adapter une solution applicative</li>
                                <li>- Apprécier la qualité de la solution obtenue par rapport à la demande initiale et aux contraintes de production</li>
                                <li>- La pertinence d’usage de la gestion des configurations</li>
                                <li>- Traiter les imprévus qui caractérisent de nombreuses activités du domaine</li>
                            </ul>
                            </p>
                            <a href="media/fiche_symfony.pdf"><input type="submit" value="Situation professionnelle 1" class="btn btn-outline-primary"></a>
                            <a href="media/fiche_electron.pdf"><input type="submit" value="Situation professionnelle 2" class="btn btn-outline-primary"></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
           <!-- footer -->
           <?php include('footer.php'); ?>
    </div>

    <div id="scrollTop" style="right: 85px!important;">
        <a href="index.php"> <img src="media/home.png" alt="Accueil" title="Retour à l'accueil"> </a>
    </div>


         
       


 


    <!-- Javascript à la fin pour pas ralentir le temps de réponse d'affichage chez le client (tout sera chargé d'abbord en haut) -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- Bootstrap Dropdown Hover JS -->
    <script src="js/bootstrap-dropdownhover.min.js"></script>

</body>

</html>