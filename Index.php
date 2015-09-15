<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8"/>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="style.css"/>

  	<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
	  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

   <script>
	  $(function() {
	    $( "#accordion" ).accordion();
	  });
  </script>
<!--Font-->
<link href='https://fonts.googleapis.com/css?family=Roboto:500,300,400' rel='stylesheet' type='text/css'>

	<title>Prix des start-up normaliennes</title>
</head>





<body>

<!-- $HEADER -->
<?php
	include("header.php")
?>

<div class="row font1">
  <div>
    <h1 class="logotop text-center">Le Prix des Startups</h1>
  </div>
  <div>
    <h1 class="logobottom text-center">NORMALIENNES</h1>
  </div>
</div>


	<div class="wrap">
<!-- $ACTUALITES -->
		<section id="actualites">
			<div class="double_titre">
				<h2 class="titre_partie">Les dernières actualités |</h2>
					<a href="archives_actualites.php"><h3 class="sous_titre_partie">Actualités archivées</h3></a>
			</div>

				<!-- Slider -->


<!-- $Concours -->
	<div class="row">
		<section id="concours">
		  <h2 class="titre_partie2">Le concours</h2>

			<div class="col-md-4">
			  	<div class="concours">
			  	<div class="circle text-center">Pour qui ?</div>
                <p>Vous êtes membre de la communauté normalienne au sens large,
                 vous avez un projet innovant, participez au premier Pecha Kucha du CNE
                 et gagnez un an de mentorat pour vous accompagner dans le développement de votre projet.
				</p>
				</div>
			</div>

			<div class="col-md-4">
			  	<div class="concours">
			  	<div class="circle text-center">Par qui ?</div>
                <p>Le Club des Normaliens dans l’entreprise (le “CNE”) est une association d’élèves
                 et d’anciens élèves de l’ENS-ULM qui travaillent dans le secteur privé.
				</p>
				</div>
			</div>

			<div class="col-md-4">
			  	<div class="concours">
			  	<div class="circle text-center">Comment ?</div>
                <p>Une soirée Pecha Kucha : lors d’une soirée en septembre 2015, vous présentez votre projet au CNE
                 et à un jury d’experts et vous pouvez gagner du mentorat pendant neuf mois: deux mentors expérimentés
                 qui acceptent de vous suivre, de vous écouter, de vous conseiller pendant une année.
				</p>
				</div>
			</div>


		</section>
 	</div>


<!-- $LAUREATS -->

		<section id="laureats">
			<div class="double_titre">

			  	<h2 class="titre_partie">Les lauréats du concours 2015 |</h2>
			  		<a href="archives_laureats.php"><h3 class="sous_titre_partie"> Les anciens lauréats</h3></a>
		  	</div>

		  	<!--colonne vide -->
		  	<div class="row">
		  		<div class="col-md-1">
		  		</div>

		  		<!--colonne lauréat -->
			  	<div class="col-md-4 colonne_laureats">
		  			<img src="laureats.jpg" alt="photo lauréat"/>
		  			<h4>Nom des Lauréats</h4>
			  			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
			  			</p>

		  					<!-- Button modal -->
							<button type="button" class="btn" data-toggle="modal" data-target="#myModal">
							 En savoir plus
							</button>

							<!-- Modal -->
							<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							        <h4 class="modal-title" id="myModalLabel">Lauréat</h4>
							      </div>
							      <div class="modal-body">

							      	<img src="laureats.jpg" alt="photo lauréat"/>

								      <p>Présentation des candidats :</br>
								      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
		  								</p>

							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

							      </div>
							    </div>
							  </div>
							</div>
		  		</div>

		  		<!--colonne vide -->
	  			<div class="col-md-2">
	  			</div>


		  		<div class="col-md-4 colonne_laureats">
		  			<img src="laureats.jpg" alt="photo lauréat"/>
		  			<h4>Nom des Lauréats</h4>
		  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
		  				</p>

							<!-- Button modal -->
							<button type="button" class="btn" data-toggle="modal" data-target="#myModal">
							  En savoir plus
							</button>

							<!-- Modal -->
							<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							        <h4 class="modal-title" id="myModalLabel">Lauréat</h4>
							      </div>
							      <div class="modal-body">

							      	<img src="laureats.jpg" alt="photo lauréat"/>

								      <p>Présentation des candidats : </br>
								      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
		  								</p>

							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

							      </div>
							    </div>
							  </div>
							</div>

		  		</div>


		  		<!--colonne vide -->
	  			<div class="col-md-1">
	  			</div>

		  	</div>
		</section>

<!-- $Partenaires -->
			<section id="partenaires">
			  	<h2 class="titre_partie2">Partenaires</h2>


			  	 <!-- contenu... -->


			</section>
		</div>

<!-- $FAQ -->

<!-- $FORMULAIRE -->

			<section id="contact">
				<h2 class="titre_partie2">Contact</h2>
					<form>

				<!-- contenu... -->


					</form>
			</section>


		</div>
</div>

<!-- $FOOTER -->
	<?php
        include("footer.php");
           ?>

<!--Fin de la page -->


</body>
</html>
