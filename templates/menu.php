<?php

/*
  Template Name: Menu
  Description : Modèle des pages du menu du restaurant
*/

get_header() ?>


<!-- SECTION MENU HEADER -->
<div class="menu-bg" style="background-image: url(<?php the_field('header_menu_pages', '12'); ?>);">

	<div class="block-dl-menu">
		
		<div class="row align-items-center">
			
			<div class="col-11 col-xl-7 mx-auto text-center">
				
				<h1><?php the_field('titre_header_menu', '12'); ?></h1>

				<p><?php the_field('description_header_menu', '12'); ?></p>

				<a href="https://www.wplearning.fr/proanais/wp-content/uploads/2021/03/menu.pdf" class="btn btn-white shadow-none" download>Téléchargez le menu</a>

			</div>

		</div>

	</div>

</div>	
<!-- fin SECTION MENU HEADER -->


<!-- SECTION MENU NAV -->
<div class="container" id="anchor-menu">
	
	<div class="row">

		<nav class="col navbar navbar-menu navbar-expand-xl navbar-dark">
			
			<button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>


			<div id="navbarContent" class="collapse navbar-collapse text-center">

				<!-- navigation du menu automatisé -->
				<?php 
				wp_nav_menu([

					// le nom du menu qu'on a déclaré dans functions.php
					'theme_location' => 'Menu',

					// ôter le container que wp place de facto
				 	'container' => false,

				 	// on c/c ici les classes données au ul dans le html
				 	'menu_class' => 'navbar-nav mx-auto',

				 ]) ?>

			</div>

		</nav>	

	</div>

</div>


<!-- SECTION MENU -->
<div class="container bg-pattern block-menu-content">

	<h2 class="text-center"><?php the_title(); ?></h2>
	
	<div class="row align-items-end">

		<?php

		if( have_rows('plats')):

			while( have_rows('plats')) : the_row();

				if( have_rows('plat_item')):

					while( have_rows('plat_item')) : the_row(); ?>

		
						<div class="col-12 col-sm-6 text-center">

							<h3><?php the_sub_field('plat_item_nom'); ?></h3>

							<p><span><?php the_sub_field('plat_item_prix'); ?></span> - <?php the_sub_field('plat_item_parts'); ?></p>
							
							<img src="<?php the_sub_field('plat_item_image'); ?>" class="img-fluid" alt="Photo d'un plat coréen"/>

						</div>

						<?php endwhile;

				endif; ?>

			<?php endwhile;

		endif; ?>

	</div>

</div>
<!-- fin SECTION MENU -->


<!-- SECTION TAKEOUT -->
<div class="bg-red menu-takeout">
	
	<div class="container">
		
		<div class="row">
			
			<div class="col text-center">
				
				<p><?php the_field('infos_bandeau', '12'); ?></p>

				<?php if (get_field('coordonnees_bandeau', '12')) { ?>

					<p class="tel"><?php the_field('telephone_header', 'options'); ?></p>

				<?php } ?>

			</div>

		</div>

	</div>

</div>
<!-- fin SECTION TAKEOUT -->

<?php get_footer() ?>