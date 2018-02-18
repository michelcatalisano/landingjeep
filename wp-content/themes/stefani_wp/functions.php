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

?>
