<?php

function haneul_scripts() {

    wp_deregister_script('jquery');
    
    wp_enqueue_script('jqueryjs', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), false, true); 
    wp_enqueue_script('boostrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array(), false, true); 

    wp_enqueue_script('font-awesome-js', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js', array(), false, true);


}
add_action('wp_enqueue_scripts', 'haneul_scripts');



function haneul_styles() {

	// parameters example: file ID or name, path, version, media (all, screen...)
	wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', array(), null);

	wp_enqueue_style('font-awesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css', array(), null);

	wp_enqueue_style('google-fonts-css', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;1,200;1,300;1,400;1,500&family=RocknRoll+One&display=swap', array(), null);

	wp_enqueue_style('style-theme', get_template_directory_uri(). '/assets/css/styles.css', array(), null);

	wp_enqueue_style('style-theme', get_template_directory_uri(). '/style.css', array(), null);

}

add_action('wp_enqueue_scripts', 'haneul_styles');


// enregistre les menus
register_nav_menus(array(

	'Header' => __('Header', 'La navigation du header' ),
	'Footer' => __('Footer', 'La navigation du footer'),
	'Menu' => __('Menu', 'La navigation du menu du restaurant'),

	));


// pour l'intégration du menu bootstrap, afin de donner les classes aux <li>
// on passe un paramètre $classes qu'on définit en nav_item (la classe du <li>) et on retourne
function haneul_menu_li_class($classes) {

	$classes[] = 'nav-item';
	return $classes;
}

// même procédé pour donner la classe nav_link aux <a> de la navbar bootstrap
function haneul_menu_link_class($attrs) {

	$attrs['class'] = 'nav-link';
	return $attrs;
}

// nav_menu_css_class : pour donner aux éléments du menu (les <li> donc) des classes css
add_filter('nav_menu_css_class', 'haneul_menu_li_class');

// nav_menu_css_class : pour donner aux éléments du menu (les <li> donc) des classes css
add_filter('nav_menu_link_attributes', 'haneul_menu_link_class');


// accepte la possibilité d'ajouter un logo
function theme_prefix_setup() {
    add_theme_support( 'custom-logo', array(
   'height'      => 106,
   'width'       => 400,
   'flex-width' => true,
   'flex-height' => true
	));
}
add_action( 'after_setup_theme', 'theme_prefix_setup' );

// ajouter une classe au custom logo
function change_logo_class($html) {

    $html = str_replace('custom-logo', 'img-fluid text-left', $html);
    return $html;
}
add_filter( 'get_custom_logo', 'change_logo_class' );


// ajoute les options de page d'ACF, pour gérer des champs apparaissant sur toutes les pages
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}


