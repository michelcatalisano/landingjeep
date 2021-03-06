<?php

// menu
if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus(
		array(
			'primary' => 'Menu principale',
		)
	);
}

// abilitare immagine thumbnails
add_theme_support( 'post-thumbnails' );

// abilitare sidebar
register_sidebar( array(
	'name' => __( 'sidebar'),
	'id' => 'sidebar',
	'description' => __( 'descrizione sidebar'),
	'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
	'after_widget' => '</li>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
	) );


function landingjeep_scripts() {
	wp_enqueue_style( 'main-style', get_template_directory_uri() . '/css/main.css');
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array(), '20151215', true );
}
add_action( 'wp_enqueue_scripts', 'landingjeep_scripts' );


?>
