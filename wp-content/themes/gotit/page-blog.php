<?php
/**
 * Template Name: Blog Page
 */
get_header(); ?>

        <?php
        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

        $arg = array(
            'paged' => $paged,
            'post_type'  => 'post',
            'posts_per_page' => 1,
            'post_status' => 'publish',
        );

        $posts = new WP_query ( $arg );
        
        if ( $posts->have_posts() ) {


            while ( $posts->have_posts()) :
                $posts->the_post();
                $title = get_the_title();
                $permalink = get_permalink();
                $excerpt  = get_the_excerpt();

            endwhile;
        }
        ?>

<?= theme_pagination();?>

<?php get_footer(); ?>
