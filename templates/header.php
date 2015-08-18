<!DOCTYPE html>
<html>
	<head>
		<title>forgeselh (Titre statique pour le moment</title>

		<link rel="stylesheet" href="<?php echo base_url(); ?>templates/css/sticky-footer.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>templates/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>templates/css/bbcode.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>templates/css/style.css"/>	
	</head>

	<body>
		<div id="modalLogin" class="modal fade" role="dialog">
		  <div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
			  <div class="modal-header bg-primary">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Connexion</h4>
			  </div>
			  <div class="modal-body">
				<p>Some text in the modal.</p>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
			  </div>
			</div>
		  </div>
		</div>
	
		<nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
			  <div class="container">
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				  <a class="navbar-brand" href="#">Forgeselh</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
				  <ul class="nav navbar-nav">
					<li><a href="<?php echo base_url(); ?>">Accueil</a></li>
					<li><a href="#contact">Contact</a></li>
				  </ul>
				  <ul class="nav navbar-nav navbar-right">
					<form class="navbar-form">
						<a href="<?php echo base_url(); ?>members/registration" type="button" class="btn btn-primary">Inscription</a>
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalLogin">Connexion</button>
					</form>
				  </ul>
				</div><!--/.nav-collapse -->
			  </div>
		</nav>
		<div class="container body">