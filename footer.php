<!-- Animation scroll-top avec icône -->
<a href="javascript:" id="scroll-top"><i class="fas fa-long-arrow-alt-up"></i></a>

<!-- SECTION FOOTER -->
		<footer>
			
			<div class="container">
				
				<div class="row justify-content-center footer-logo">

					<?php 
					if (function_exists( 'the_custom_logo' )) {
					    the_custom_logo();
					} ?>

				</div>


				<div class="row">
					
					<div class="col-12 col-md-4 col-footer">
						
						<h3>MOYENS DE PAIEMENT | <span>지불</span></h3>

						<ul class="list-unstyled">



							<?php
							if( have_rows('moyen_de_paiement', 'options') ):

							    while( have_rows('moyen_de_paiement', 'options') ) : the_row();

							        ?> <li> <?php

							        the_sub_field('paiement_nom', 'options'); 

							        ?> </li> <?php

							    endwhile;
							    
							endif;
							?>

						</ul>

					</div>


					<div class="col-12 col-md-4 col-footer">
						
						<h3>LIENS UTILES | <span>사이</span></h3>

						<!-- menu footer automatisé -->
						<?php 
							wp_nav_menu([

								'theme_location' => 'Footer',
							 	'container' => false,
							 	'menu_class' => 'list-unstyled'

						]) ?>

					</div>


					<div class="col-12 col-md-4 col-footer">
						
						<h3 class="text-center">SERVICES | <span>서비스</span></h3>

						<div class="row row-img justify-content-center">
							
							<div class="col-4 col-md-6 text-center">
						
								<img src="<?php echo get_template_directory_uri() . '/assets/images/icons/terrasse.png' ?>" height="35" width="35" alt="">

								<h4>TERRASSE</h4>

							</div>

							<div class="col-4 col-md-6  text-center">
						
								<img src="<?php echo get_template_directory_uri() . '/assets/images/icons/group.png' ?>" height="35" width="35" alt="">

								<h4>GROUPES</h4>

							</div>

						</div>

						<div class="row row-img justify-content-center">

							<div class="col-4 col-md-6  text-center">
						
								<img src="<?php echo get_template_directory_uri() . '/assets/images/icons/take-away.png' ?>" height="35" width="35" alt="">

								<h4>A EMPORTER</h4>

							</div>

							<div class="col-4 col-md-6  text-center">
						
								<img src="<?php echo get_template_directory_uri() . '/assets/images/icons/wifi.png' ?>" height="35" width="35" alt="">

								<h4>WIFI</h4>

							</div>

						</div>

					</div>

				</div>

				<div class="row">

					<div class="col-12 follow-us text-center">
						
						<p class="text-center">Suivez-vous sur les réseaux !</p>

					</div>

					<div class="col-12 rs-logos text-center">
						
						<a href="<?php the_field('lien_yt', 'options') ?>"><i class="fab fa-youtube"></i></a>
						<a href="<?php the_field('lien_fb', 'options') ?>"><i class="fab fa-facebook-f"></i></a>
						<a href="<?php the_field('lien_insta', 'options') ?>"><i class="fab fa-instagram-square"></i></a>
						

					</div>

				</div>

			</div>

			<div class="footer-copyright">

				<div class="col text-center">
					
					&copy;<?php echo date("Y"); ?> Haneul - Restaurant coréen. Tous droits réservés.

				</div>	

			</div>

		</footer>

		<?php wp_footer(); ?>

		<!-- script pour la scroll-top -->
		<script>
			
			$(window).scroll(function() {
			    if ($(this).scrollTop() >= 200) {        // Si on scroll à + de 200px
			        $('#scroll-top').fadeIn(200);    // faire apparaître
			    } else {
			        $('#scroll-top').fadeOut(200);   // sinon faire disparaître
			    }
			});

			$('#scroll-top').click(function() {      // au clic
			    $('body,html').animate({
			        scrollTop : 0                       // remonter jusqu'en haut
			    }, 500);
			});

		</script>

	</body>
	
</html>