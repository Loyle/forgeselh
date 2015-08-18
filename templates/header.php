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
				  <!-- MODULE DE CONNEXION -->
                <button class="btn btn-primary login_btn" type="button" , data-toggle="modal" data-target="#login" aria-hiiden="true">
                    Connexion
                </button>
                <div class="modal fade text-left" id="login">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header  text-center">
                                <h2>Connexion au compte</h2>
                            </div>
                            <?php echo form_open( 'members/login'); ?>
                            <div class="modal-body">
                                <label for="username">Votre identifiant: </label>
                                <input class="form-control" type="text" id="username" name="username" placeholder="Votre pseudo" required="required" />
                                <label for="password">Votre mot de passe: </label>
                                <input class="form-control" type="password" name="password" id="password" placeholder="Votre mot de passe" required="required"/>
                            </div>
                            <div class="modal-footer">
                                	<button type="submit" class="btn btn-primary pull-right">Connexion</button>
                                	<a class="pull-left" href="<?php echo base_url(); ?>members/inscription">Pas encore de compte?</a>
                            	</div>
                            	<?php echo form_close(); ?>
                        	</div>
                    	</div>
                	</div>
				</div><!--/.nav-collapse -->
			  </div>
		</nav>
		<div class="container body">