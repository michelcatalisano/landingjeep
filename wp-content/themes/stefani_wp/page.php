<?php
/*
Template Name: Page
Version: 1.0
*/

get_header(); ?>
<div class="altodx">
  <?php the_field('testo_in_alto_a_dx'); ?>
</div>

<!-- thumbnail pagina -->
<?php if( has_post_thumbnail()) { the_post_thumbnail(); } ?>

<!-- titolo -->
<h1> <?php the_title(); ?> </h1>

<!-- contenuto della pagina -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; else: ?>
    <p><?php _e('Nessun articolo corrisponde ai criteri di ricerca.'); ?></p>
<?php endif; ?>

<?php dynamic_sidebar('sidebar'); ?>

<!-- footer -->
<?php get_footer(); ?>
