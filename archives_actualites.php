<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8"/>

	<link href='https://fonts.googleapis.com/css?family=Roboto:500,300,400' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"/>
	<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="style.css"/>
</head>

<body>
	<div class="container-fluid">


	<?php
		include("header.php")
	?>

<div class="wrap">
	<section class="archives_actualites">

		<h1 class="titre_partie2">Actualités archivées</h1>
				<!--colonne vide -->
			  	<div class="row">
			  		<div class="col-md-1">
			  		</div>

			  		<!--colonne lauréat -->
				  	<div class="col-md-4 colonne_laureats">
			  			<img src="laureats.jpg" alt="photo lauréat"/>
			  			<h2>Titre de l'article</h2>
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
								       <h3 class="modal-title" id="myModalLabel">Titre de l'article</h3>
								      </div>

								      <div class="modal-body">
										<p>Date</p>
									    <img src="laureats.jpg" alt="photo lauréat"/>
									    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
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
			  			<h2>Titre de l'article</h2>
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
								        <h3 class="modal-title" id="myModalLabel">Titre de l'article</h3>
								      </div>

								      <div class="modal-body">
										<p>Date</p>
									    <img src="laureats.jpg" alt="photo lauréat"/>
									    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
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
	</section>
</div>


	<?php
		include("footer.php");
	?>

</div>
</body>
</html>
