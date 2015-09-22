<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8"/>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="style.css"/>
	  <link rel="shortcut icon" type="image/png" href="favicon.png"/>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
		<!--Font-->
		<link href='https://fonts.googleapis.com/css?family=Roboto:500,300,400' rel='stylesheet' type='text/css'>

	  <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
		<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		<script>
		  $(function() {
		    $( "#accordion" ).accordion();
		  });
	  </script>
	    <script type="text/javascript">
$(window).bind("load resize slid.bs.carousel", function() {
  var imageHeight = $(".active .holder").height();
  $(".controllers").height( imageHeight );
  console.log("Slid");
});
</script>

		<title>Prix des start-up normaliennes</title>
	</head>

<body>



	<!-- $HEADER -->
		<?php
			include("header.php")
		?>

	<!-- $BANNIERE -->
		<div class="container-fluid">
			<div class="row font1">
		  		<div>
		    		<h1 class="logotop text-center">Le Prix des Startups</h1>
		  		</div>
				<div>
				    <h1 class="logobottom text-center">NORMALIENNES</h1>
				</div>
			</div>
		</div>

	<!-- $ACTUALITES -->
		<div class="container-fluid" id="actualites">
			<div class="wrap">
				<section>
			

					<div class="double_titre">
						<h2 class="titre_partie">Les dernières actualités |</h2>
						<a href="archives_actualites.php"><h3 class="sous_titre_partie">Actualités archivées</h3></a>
					</div>
	<!--    $SLIDER      -->
					<div class="row">
						<div class="col-sm-offset-2 col-sm-8" class="slider">
							<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	<!-- Wrapper for slides -->
								<div class="carousel-inner">

									<div class="controllers col-sm-12 col-xs-12">
	<!-- Controls -->
									  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
									    <span class="glyphicon glyphicon-chevron-left"></span>
									  </a>
									  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
									    <span class="glyphicon glyphicon-chevron-right"></span>
									  </a>
	<!-- Indicators -->
									  <ol class="carousel-indicators">
									    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
									    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
									    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
									  </ol>
									</div>

									<div class="item active">
									  <div class="holder col-sm-5">
									    <img class="img-responsive" src="ressources/img4.jpg" alt="...">
									  </div>
									  <div class="col-sm-7">
									    <div class="carousel-caption">
									        <h2>Mode Pecha Kucha !</h2><h6>Date de publication: 28.09.15</h6>
									        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Lorem ipsum dolor sit amet, JE TEST COMMEddddddddddddd YNconsectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, semia. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, semia.</p>
									      </div>
									      	<button type="button" class="btn btn-default">En savoir plus</button>
									  </div>
									</div>

									<div class="item">
											<div class="holder col-sm-5">
										    	<img class="img-responsive" src="ressources/img2.jpg" alt="...">
										  	</div>
											 <div class="col-sm-7">
											    <div class="carousel-caption">
											        <h2>Startups</h2>
															<h6>Date de publication: 30.09.15</h6>
											        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</p>
										    	</div>
										    		<button type="button" class="btn btn-default">En savoir plus</button>
										  	</div>
									</div>

									<div class="item">
										<div class="holder col-sm-5">
										    	<img class="img-responsive" src="ressources/img3.jpg" alt="...">
										</div>
										  	<div class="col-sm-7">
										    	<div class="carousel-caption">
										        	<h2>Get ready !</h2>
															<h6>Date de publication: 03.09.15</h6>
										        	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</p>
										    	</div>
										    		<button type="button" class="btn btn-default">En savoir plus</button>
										  	</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>

	<!-- $CONCOURS -->
		<div class="container-fluid" id="concours">
			<div class="wrap2">
				<section>
				
					<div class="row">
				  	<h2 class="titre_partie2">Le concours</h2>
						<div class="col-md-4">
					  	<div class="concours">
					  		<div class="circle text-center">Pour qui ?
					  		</div>
		            <p>Vous êtes membre de la communauté normalienne au sens large, vous avez un projet innovant, participez au premier Pecha Kucha du CNE Òet gagnez un an de mentorat pour vous accompagner dans le développement de votre projet.
								</p>
						</div>
						</div>
						<div class="col-md-4">
					  	<div class="concours">
					  		<div class="circle text-center">Par qui ?
					  		</div>
		          	<p>Le Club des Normaliens dans l’entreprise (le “CNE”) est une association d’élèves et d’anciens élèves de l’ENS-ULM qui travaillent dans le secteur privé.
								</p>
						</div>
						</div>
						<div class="col-md-4">
					  	<div class="concours">
					  		<div class="circle text-center">Comment ?</div>
		            <p>Une soirée Pecha Kucha : lors d’une soirée en septembre 2015, vous présentez votre projet au CNE et à un jury d’experts et vous pouvez gagner du mentorat pendant neuf mois: deux mentors expérimentés qui acceptent de vous suivre, de vous écouter, de vous conseiller pendant une année.
								</p>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>

	<!-- $LAUREATS -->
		<div class="container-fluid" id="laureats">
			<div class="wrap2">
			<section class="laureats">
		
					<div class="double_titre">
						<h2 class="titre_partie">Les lauréats du concours 2015 |</h2>
				  	<a href="archives_laureats.php"><h3 class="sous_titre_partie"> Les anciens lauréats</h3></a>
			  		</div>
	<!--colonne vide -->
			  	<div class="row">
			  		<div class="col-md-1"></div>
	<!--colonne lauréat -->
				  	<div class="col-md-4 colonne_laureats">
			  			<img src="laureats.jpg" alt="photo lauréat"/>
			  			<h4>Nom des Lauréats</h4>
				  		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
				  		</p>
	<!-- Button modal -->
							<button type="button" class="btn" data-toggle="modal" data-target="#myModal">En savoir plus</button>
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
		  			<div class="col-md-2"></div>
						<div class="col-md-4 colonne_laureats">
			  			<img src="laureats.jpg" alt="photo lauréat"/>
			  			<h4>Nom des Lauréats</h4>
			  			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
			  			</p>
	<!-- Button modal -->
								<button type="button" class="btn" data-toggle="modal" data-target="#myModal">En savoir plus</button>
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
		  				<div class="col-md-1"></div>
						</div>
				
			</section>
			</div>
		</div>

	<!-- $PARTENAIRES -->
	<div id="partenaires"></div>
		<div class="container-fluid">
			<div class="wrap2">
				<section>
					<div class="row fond_partenaires">
						<h2 class="titre_partie2">Partenaires</h2>
						<div class="col-md-offset-2 col-md-3">
							<div>
									<a href="http://www.idinvest.com/" target="_blank"><img class="center-block" src="ressources/idinvest.png" alt="Logo de Id.Invest"></a>
							</div>
						</div>
							<div class="col-md-offset-2 col-md-3">
								<div>
									<a href="http://www.normaliensentreprise.fr/" target="_blank"><img class="img-partner center-block"src="ressources/logoCNE.png" alt="Logo du C.N.E"></a>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	<!-- $FAQ -->

	<!-- $FORMULAIRE -->
		<div class="container-fluid" id="contact">
			<section>
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
