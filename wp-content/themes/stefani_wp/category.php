<?php get_header(); ?>

<!-- titolo category post -->
<h1><?php printf( __( '%s' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?></h1>

<!-- mostra elenco post -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<a href="<?php the_permalink();?>">
  
  <!-- thumbnail pagina -->
  <?php if( has_post_thumbnail()) { the_post_thumbnail(); } ?>


  <h1><?php the_title(); ?></h1></a>
<h2><?php the_time( get_option( 'date_format' ) ); ?></h2>

<?php the_excerpt(); ?>
    <?php endwhile; else: endif; ?>
        <?php
        global $wp_query;

        $big = 999999999;

        echo paginate_links( array(
                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                'format' => '?paged=%#%',
                'current' => max( 1, get_query_var('paged') ),
                'total' => $wp_query->max_num_pages
        ) );
        ?>

<!-- footer -->
<?php get_footer(); ?>
