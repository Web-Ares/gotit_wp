<?php
/**
 * Template Name: Home Page
 */
get_header(); ?>


    <?php
    $tmp = $post;
    $services = getServices();
    foreach ($services as $post){
        the_title();
        $choose_the_preview_icon = get_field('choose_the_preview_icon');
    }
    $post = $tmp;

    var_dump(getTeammates(3))

?>

<?php get_footer(); ?>
