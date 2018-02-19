<?php
/*
Template Name: Homepage
Version: 1.0
*/
get_header(); ?>

<div id="page">
  <div class="container">
    <!-- contenuto della pagina -->
    <?php while ( have_posts() ) : the_post(); ?>
      <?php
        get_template_part('template-parts/section', '01');
        get_template_part('template-parts/section', '02');
        get_template_part('template-parts/section', '03');
        get_template_part('template-parts/section', '04');
        get_template_part('template-parts/section', 'slideshow');
        get_template_part('template-parts/section', 'form');
      ?>
    <?php endwhile; ?>
  </div>
</div>

<?php get_footer(); ?>
