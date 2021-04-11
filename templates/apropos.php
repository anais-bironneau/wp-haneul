<?php

/*
  Template Name: A propos
  Description : Modèle de la page à propos du restaurant
*/

get_header() ?>


<!-- SECTION MENU HEADER -->
<div class="about-bg" style="background-image: url(<?php the_field('header_bg_about'); ?>);">

	<div class="about-header">
		
		<div class="row align-items-center">
			
			<div class="col-11 col-xl-7 mx-auto text-center">
				
				<h1><?php the_title(); ?></h1>

				<p><?php the_field('resume_header_apropos'); ?></p>

			</div>

		</div>

	</div>

</div>	
<!-- fin SECTION MENU HEADER -->


<!-- SECTION A PROPOS -->
<div class="bg-pattern about-block">
	
	<div class="container">

		<?php
		if( have_rows('rubrique_apropos')):

		    while( have_rows('rubrique_apropos')) : the_row(); ?>

				<div class="row">
					
					<div class="col-12 col-lg-8 mx-auto">
						
						<h2 class="text-center"><?php the_sub_field('titre_rubrique'); ?></h2>

						<?php $count = count(get_sub_field('images_rubrique')); ?>	

						<?php
						if( have_rows('images_rubrique')): ?>

							<div class="row justify-content-between">

		    				<?php while( have_rows('images_rubrique')) : the_row(); ?>


								<div class="col-12 

								<?php 

								if ($count > 1) { ?>

								col-sm-6 

								<?php }

								?>

								text-center">

									<img src="<?php the_sub_field('image_rubrique_solo'); ?>" class="img-fluid about-img" alt="Photo illustrant le restaurant"/>

								</div>


		    				<?php endwhile; ?>

		    				</div>

		    			<?php endif; ?>


		    			<?php
						if( have_rows('paragraphes_rubrique')): ?>

							<div class="owners-wrapper">

		    				<?php while( have_rows('paragraphes_rubrique')) : the_row(); ?>


								<p class="text-justify"><?php the_sub_field('paragraphe_rubrique_solo'); ?></p>	
													

		    				<?php endwhile; ?>

		    				</div>

		    			<?php endif; ?>

					</div>

				</div>


			<?php

		    endwhile;
		    
		endif;
		?>

		<?php
		if( have_rows('chaine_youtube')):

		    while( have_rows('chaine_youtube')) : the_row(); ?>

				<div class="row">

					<div class="col-12 col-lg-8 mx-auto text-center">

						<h2 class="text-center"><?php the_sub_field('titre_rubrique_yt'); ?></h2>

						<?php
						if( have_rows('paragraphe_rubrique_yt')): ?>

							<div class="owners-wrapper">

		    				<?php while( have_rows('paragraphe_rubrique_yt')) : the_row(); ?>


								<p class="text-justify"><?php the_sub_field('paragraphe_rubrique_yt_solo'); ?></p>	
													

		    				<?php endwhile; ?>

		    				</div>

		    			<?php endif; ?>

						<?php
						if( have_rows('video_presentation')): ?>

		    				<?php while( have_rows('video_presentation')) : the_row(); ?>

								<?php the_sub_field('lien_video'); ?>
													
		    				<?php endwhile; ?>

		    			<?php endif; ?>

						<a class="btn btn-red shadow-none" href="<?php the_field('lien_yt', 'options') ?>">DECOUVRIR NOS VIDEOS</a>

					</div>

				</div>

			<?php
			endwhile;

		endif; ?>
		

	</div>

</div>



<?php get_footer() ?>