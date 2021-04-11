<?php

/*
  Template Name: Homepage
  Description : Modèle de la page d'accueil
*/

get_header() ?>

<!-- BACKGROUND VH -->
<div class="header-vh" style="background-image: url(<?php the_field('header_accueil'); ?>);">
	
	<div class="container">
		
		<div class="row bg-content align-items-center">
			
			<div class="col-10 col-md-7 block-title mx-auto text-center">

				<div class="col-12 col-md-11 col-xl-7 col-accroche mx-auto">
					
					<h1>

					<?php the_field('nom_coreen'); ?> <br/>
					<?php the_field('accroche_accueil'); ?>

					</h1>


				</div>
				
				
				<button class="btn btn-primary btn-red shadow-none" data-toggle="modal" data-target="#modal-reservation">JE RÉSERVE</button>

				<!-- MODAL RESERVATION -->
				<div class="modal fade" id="modal-reservation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

				  <div class="modal-dialog" role="document">

				    <div class="modal-content">

				      <div class="modal-header">

				        <h2 class="modal-title" id="exampleModalLabel"><?php the_field('titre_du_pop-up_fr'); ?> | <?php the_field('titre_du_pop-up_co'); ?></h2>

				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

				          <span aria-hidden="true">&times;</span>

				        </button>

				      </div>

				      <div class="modal-body text-left">

				      	<p><?php the_field('reservation_description'); ?> </p>

				      	<p><?php the_field('reservation_coordonnees'); ?> <span><?php the_field('telephone_header', 'options'); ?></span></p>

				      </div>

				      <div class="modal-footer">

				        <button type="button" class="btn btn-white" data-dismiss="modal">Fermer</button>

				      </div>

				    </div>

				  </div>

				</div>
				<!-- fin MODAL REVERVATION -->

			</div>

		</div>

	</div>


	<!-- SECTION HORAIRES -->
	<div class="container block-horaires text-center">
		
		<div class="row">
			
			<div class="col text-center">

				<div class="border-horaires">
				
					<h2><?php the_field('titre_horaires_fr'); ?> | <?php the_field('titre_horaires_co'); ?></h2>

					<p><?php the_field('horaires_salle'); ?></p>

					<p><?php the_field('horaires_emporter'); ?></p>

				</div>

			</div>

		</div>

	</div>
	<!-- fin SECTION HORAIRES -->

</div>
<!-- fin HEADER VH -->


<!-- SECTION MENU -->
<div class="container block-menu">

<h2><?php the_field('titre_menu_fr'); ?> | <?php the_field('titre_menu_co'); ?></h2>

<div class="row">
	
	<div class="col-12 col-sm-6 col-md-3 text-center">

		<div class="block-img">
		
			<img src="<?php the_field('image_menu_1'); ?>" class="img-fluid" alt="Photo d'un plat coréen" />

			<div class="middle">
					
				<a href="<?php the_permalink('12'); ?>" class="btn btn-primary btn-white shadow-none">DECOUVRIR</a>

			</div>

		</div>

	</div>

	<div class="col-12 col-sm-6 col-md-3 text-center">

		<div class="block-img">
		
			<img src="<?php the_field('image_menu_2'); ?>" class="img-fluid" alt="Photo d'un plat coréen" />

			<div class="middle">
					
				<a href="<?php the_permalink('12'); ?>" class="btn btn-primary btn-white shadow-none">DECOUVRIR</a>

			</div>

		</div>

	</div>

	<div class="col-12 col-sm-6 col-md-3 text-center">

		<div class="block-img">
		
			<img src="<?php the_field('image_menu_3'); ?>" class="img-fluid" alt="Photo d'un plat coréen" />

			<div class="middle">
					
				<a href="<?php the_permalink('12'); ?>" class="btn btn-primary btn-white shadow-none">DECOUVRIR</a>

			</div>

		</div>

	</div>

	<div class="col-12 col-sm-6 col-md-3 text-center">

		<div class="block-img">
		
			<img src="<?php the_field('image_menu_4'); ?>" class="img-fluid" alt="Photo d'un plat coréen" />

			<div class="middle">
					
				<a href="<?php the_permalink('12'); ?>" class="btn btn-primary btn-white shadow-none">DECOUVRIR</a>

			</div>

		</div>

	</div>

</div>

<div class="row links-to-menu">
	
	<div class="col-12 text-center">
		
		<a href="<?php the_permalink('12'); ?>" class="btn btn-primary btn-red shadow-none"><?php the_field('lien_vers_menu'); ?></a>

	</div>

	<div class="col-12 dl-menu-col text-center">

		<?php if (get_field('menu_pdf', 'options')) { ?>
			
			<a href="<?php the_field('menu_pdf', 'options'); ?>" class="dl-menu" download><?php the_field('lien_telecharger_menu'); ?></a>
		
		<?php } ?>
		

	</div>

</div>


</div>
<!-- fin SECTION MENU -->


<!-- SECTION PLAN -->
<div class="bg-pattern">

	<div class="container block-plan text-center">

		<h2><?php the_field('titre_acces_fr'); ?> | <?php the_field('titre_acces_co'); ?></h2>
		
		<div class="row justify-content-between align-items-center">
			
			<div class="col-11 mx-auto col-lg-3 acces-wrapper text-center">

				<div class="block-plan-acces">

					<p><i class="fas fa-map-pin icon"></i></p>

					<!-- Boucle pour afficher les accès au restaurant -->
					<?php
					if( have_rows('rubrique_localisation') ):

					    while( have_rows('rubrique_localisation') ) : the_row();

					        ?> <p> <?php

					        the_sub_field('info_localisation'); 

					        ?> </p> <?php

					    endwhile;

					endif;
					?>

				</div>

			</div>

			<div class="col-11 mx-auto col-lg-3 col-lg-3 acces-wrapper text-center">

				<div class="block-plan-acces">

					<p><i class="fas fa-tram icon"></i></p>

					<!-- Boucle pour afficher les accès au restaurant -->
					<?php
					if( have_rows('rubrique_tram') ):

					    while( have_rows('rubrique_tram') ) : the_row();

					        ?> <p> <?php

					        the_sub_field('info_tram'); 

					        ?> </p> <?php

					    endwhile;

					endif;
					?>

				</div>

			</div>

			<div class="col-11 mx-auto col-lg-3 col-lg-3 acces-wrapper text-center">

				<div class="block-plan-acces">

					<p><i class="fas fa-parking icon"></i></p>

					<!-- Boucle pour afficher les accès au restaurant -->
					<?php
					if( have_rows('rubrique_parking') ):

					    while( have_rows('rubrique_parking') ) : the_row();

					        ?> <p> <?php

					        the_sub_field('info_parking'); 

					        ?> </p> <?php

					    endwhile;

					endif;
					?>

				</div>

			</div>

		</div>

	</div>

	<!-- INTEGRATION GOOGLE MAPS -->
	<?php the_field('lien_carte'); ?>

</div>




<!-- SECTION LA TEAM -->
<div class="block-team-bg" style="background-image: url(<?php the_field('header_team_homepage'); ?>);">

	<div class="container">
		
		<div class="row align-items-center">
			
			<div class="notre-equipe-col col-12 col-md-9 mx-auto text-center">

				<div class="block-team">
				
					<div class="block-team-inner">
						
						<h2><?php the_field('titre_equipe_fr'); ?> | <?php the_field('titre_equipe_co'); ?></h2>


						<!-- Boucle pour afficher les paragraphes de présentation de l'équipe -->
						<?php
						if( have_rows('contenu_equipe')):

						    while( have_rows('contenu_equipe')) : the_row(); ?>

						<p><?php the_sub_field('paragraphe_equipe'); ?></p>

							<?php endwhile;

						endif; ?>

						
						<!-- Pour avoir le nombre d'images chargées en back-office -->
						<?php $count = count(get_field('images_equipe')); ?>

						<!-- Boucle pour afficher les images de présentation de l'équipe -->
						<?php
						if( have_rows('images_equipe')): ?>

							<div class="row block-team-img">

							    <?php while( have_rows('images_equipe')) : the_row(); ?>

									<div class="col-12

									<?php 

									// pour mettre les images côte à côte quand il y en a plus qu'une
									if ($count > 1) { ?>

									col-sm-6 

									<?php } ?>

									text-center mx-auto">
										
										<img src="<?php the_sub_field('image_equipe'); ?>" class="img-fluid" alt="Photo de membre de l'équipe du restaurant"/>

									</div>
										
								<?php endwhile; ?>

							</div>

						<?php endif; ?>

						<a href="<?php the_permalink('39'); ?>" class="btn btn-primary btn-red shadow-none">RENCONTREZ NOTRE EQUIPE</a>
						
					</div>

				</div>

			</div>

		</div>

	</div>

</div>


<?php get_footer() ?>

	