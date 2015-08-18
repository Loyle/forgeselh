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
						<a href="<?php echo base_url(); ?>members/inscription" type="button" class="btn btn-primary">Inscription</a>
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalLogin">Connexion</button>
					</form>
				  </ul>
				</div><!--/.nav-collapse -->
			  </div>
		</nav>
		<div class="container body">