<?php
/*
Template Name: Homepage
Version: 1.0
*/
get_header(); ?>

<!-- thumbnail pagina -->
<?php if( has_post_thumbnail()) { the_post_thumbnail(); } ?>

<!-- titolo -->
<?php the_title(); ?>

<!-- contenuto della pagina -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; else: ?>
    <p><?php _e('Nessun articolo corrisponde ai criteri di ricerca.'); ?></p>
<?php endif; ?>

<!-- footer -->
<?php get_footer(); ?>
