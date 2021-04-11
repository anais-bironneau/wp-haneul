<!DOCTYPE html>
<html lang="fr-FR">
	<head>
		<title><?php echo get_bloginfo('name'); ?></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1"/>
		<meta name="description" content="<?php echo get_bloginfo('description'); ?>">

		<?php wp_head(); ?>

	</head>
	<body>


		<!-- BANDEAU INFOS -->
		<div class="header-info">
			
			<div class="container-fluid header-info-content">
				
				<div class="row">
					
					<div class="col-12 col-sm-8 text-left">
						
						<!-- TODO : link google maps ancre -->
						<p><i class="fas fa-map-marker-alt header-info-icon"></i><?php the_field('adresse_complete', 'options'); ?></p>

					</div>

					<div class="col-12 col-sm-4 text-right">
						
						<p><i class="fas fa-phone-alt header-info-icon"></i><?php the_field('telephone_header', 'options'); ?></p>

					</div>

				</div>

			</div>

		</div>
		<!-- fin BANDEAU INFOS-->


		<!-- NAV -->
		<div class="nav-bg">
			
			<div class="container-fluid">
				
				<div class="row">

					<nav class="col navbar-main navbar navbar-expand-xl navbar-dark"> <!-- navbar dark/light nécessaire pour que l'icon burger apparaisse! -->

							<?php
							if ( function_exists( 'the_custom_logo' ) ) {
							    the_custom_logo();
							} ?>

						<!-- le menu burger responsive (ID doit être le même que le collapse plus bas) -->
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>


						<div id="navbarContent" class="collapse navbar-collapse text-center">

							<?php 
							wp_nav_menu([

								// le nom du menu qu'on a déclaré dans functions.php
								'theme_location' => 'Header',

								// ôter le container que wp place de facto
							 	'container' => false,

							 	// on c/c ici les classes données au ul dans le html
							 	'menu_class' => 'navbar-nav ml-auto',

							 ]) ?>

						</div>

					</nav>	

				</div>
					
			</div>

		</div>
		<!-- fin NAV -->
		

		