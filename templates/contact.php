<?php

/*
  Template Name: Contact
  Description : Modèle de la page de contact du restaurant
*/

get_header() ?>


<!-- BACKGROUND CONTACT CONTENT -->
<div class="bg-pattern contact-content">

	<!-- SECTION CONTACT HEADER -->
	<div class="container-fluid">

		<div class="row justify-content-center contact-info">

			<div class="col-12 col-lg-8 text-center">

				<h1><?php the_title(); ?></h1>
		
				<p class="text-center"><?php the_field('informations_header_contact'); ?></p>

			</div>

		</div>

	</div>
	<!-- fin SECTION CONTACT HEADER -->

	<div class="row row-contact">
				
		<div class="col-12 col-sm-8 col-lg-5 col-xl-3 mx-auto text-center coordoonnees">
		
			<div class="coordoonnees-wrapper">

				<div class="coordoonnees-inner">

					<img src="<?php the_field('logo'); ?>" class="img-fluid" alt="logo"/>

					<p><?php the_field('adresse_rue'); ?><br/>
					<?php the_field('adresse_cp')?> <?php the_field('adresse_ville'); ?><br/>
					Tél: <span><?php the_field('telephone'); ?></span> <br/>
					Email: <span><?php the_field('email'); ?></span></p>

				</div>

			</div>

		</div>

	</div>


	<!-- SECTION NOUS ECRIRE -->
	<div class="container-fluid contact-block">

		<div class="row">
			
			<div class="col-10 form-col mx-auto text-center">
				
				<h2 class="nous-ecrire"><?php the_field('titre_nous_ecrire_fr'); ?><span> | <?php the_field('titre_nous_ecrire_co'); ?></span></h2>

				<!-- intégration du formulaire de contact WP -->
				<?php echo do_shortcode( '[contact-form-7 id="334" title="Formulaire de contact (Page contact)" ]' ); ?>

			</div>

		</div>

	</div>
	<!-- fin SECTION NOUS ECRIRE -->



	<!-- SECTION NOUS TROUVER -->
	<div class="plan-block">
		
		<div class="container-fluid text-center">

			<div class="row">
				
				<div class="col">
					
					<h2><?php the_field('titre_nous_trouver_fr'); ?><span> | <?php the_field('titre_nous_trouver_co'); ?></span></h2>

					<p><?php the_field('paragraphe_nous_trouver'); ?></p>

					<!-- intégration de la carte Google Maps -->
					<?php the_field('lien_carte', '2'); ?>

				</div>

			</div>

		</div>

	</div>
	<!-- fin SECTION NOUS TROUVER -->

</div>
<!-- fin BACKGROUND CONTACT CONTENT -->


<?php get_footer() ?>