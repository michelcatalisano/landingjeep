<?php get_header(); ?>

<!-- contenuto della pagina -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <!-- thumbnail pagina -->
  <?php if( has_post_thumbnail()) { the_post_thumbnail(); } ?>

	<h1><?php the_title(); ?></h1>
	<h2><?php the_date('d F Y'); ?></h2>
	<?php the_content(); ?>
	<?php trackback_rdf(); ?>
	<?php endwhile; else: ?>
	<p> <?php _e('Nessun articolo corrisponde ai criteri di ricerca.'); ?> </p>
<?php endif; ?>

<!-- footer -->
<?php get_footer(); ?>
