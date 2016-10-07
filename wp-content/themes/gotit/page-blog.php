<?php
/**
 * Template Name: Blog Page
 */
get_header(); ?>



<!--site__content-->
<div class="site__content">

    <h2 class="site__main-title site__main-title_inner">
        <?php
        $word =  get_field('fill_the_word_for_background');
        echo ($word)? $word : 'Our Blog'; ?>
    </h2>

    <!-- blog -->
    <div class="blog">

        <div class="blog__inner">

            <h1 class="site__title site__title_3 site__content-title"><?php the_title(); ?></h1>

            <!-- blog__posts -->
            <div class="blog__posts">

                <?php
                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

                $arg = array(
                    'paged' => $paged,
                    'post_type'  => 'post',
                    'posts_per_page' => 5,
                    'post_status' => 'publish',
                );

                $posts = new WP_query ( $arg );

                if ( $posts->have_posts() ) {


                    while ( $posts->have_posts()) :
                        $posts->the_post();
                        $title = get_the_title();
                        $permalink = get_permalink();
                        $excerpt  = get_the_excerpt();
                        $image = get_field('main_image_for_prview_and_top_of_the_post');
                        if($image){
                            $imageID = $image['ID'];
                            $alt = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                        }
                        ?>

                        <!-- blog__post -->
                        <div class="blog__post">

                            <!-- blog__post-pic -->
                            <div class="blog__post-pic">
                                <?php if($image): ?>
                                    <img src="<?= $image['url'] ?>" title="<?= $image['description'] ?>"  alt="<?= $alt ?>">
                                <?php endif; ?>
                            </div>
                            <!-- /blog__post-pic -->

                            <!-- blog__post-content -->
                            <div class="blog__post-content">

                                <h2 class="blog__post-title"><a href="<?= $permalink ?>"><?= $title ?></a></h2>
                                <p><?= $excerpt ?></p>
                                <a href="<?= $permalink ?>" class="btn btn_7">read more</a>

                            </div>
                            <!-- /blog__post-content -->

                        </div>
                        <!-- /blog__post -->

                    <?php   endwhile;
                }
                ?>

            </div>
            <!-- blog__posts -->



        </div>

    </div>
    <!-- /blog -->

    <?= theme_pagination();?>
 
    <?php get_template_part('content', 'service-map'); ?>
</div>
<!--/site__content-->


<?php get_footer(); ?>
