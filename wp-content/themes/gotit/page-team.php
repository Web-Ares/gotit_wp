<?php
/**
 * Template Name: Team Page
 */
get_header(); ?>

    <!--site__content-->
    <div class="site__content">
    
        <h2 class="site__main-title site__main-title_inner">
            <?php the_field('background_text'); ?>
        </h2>
    
        <!-- team -->
        <div class="team">
    
            <div class="team__inner">
    
                <h1 class="site__title site__title_3 site__content-title"><?php the_title(); ?></h1>
    
                <!-- squad -->
                <div class="squad">
    
                    <div class="squad__disk"></div>
                    <div class="squad__inner">
                        
                        <?php $team = getTeammates(); ?>
                        
                        <!-- squad__items -->
                        <div class="squad__items">
                            <?php if($team): ?>
                            <!-- swiper-container -->
                            <div class="swiper-container">
                                <div class="swiper-wrapper">

                                    <?php
                                    $tmp = $post;
                                    foreach ($team as $post){
                                        $id = get_post_thumbnail_id();

                                        $attr = getImagesAttributes('thumb',$id);
                                        ?>

                                        <div class="swiper-slide">

                                            <!-- squad__item -->
                                            <div class="squad__item">

                                                <!-- squad__pic -->
                                                <div class="squad__pic">

                                                    <img src="<?= $attr['url'] ?>" width="265" height="265"  alt="<?= $attr['alt'] ?>" title="<?= $attr['description'] ?>">

                                                </div>
                                                <!-- /squad__pic -->

                                                <span class="squad__name"><?php the_title(); ?></span>
                                                <span class="squad__post"><?php the_field('position'); ?></span>
                                            </div>
                                            <!-- /squad__item -->

                                        </div>

                                    <?php }
                                    $post = $tmp;
                                    ?>


                                </div>
                            </div>
                        <?php endif; ?>
                        </div>
                        <!-- /squad__items -->
    
                    </div>
    
                </div>
                <!-- /squad -->
    
            </div>
    
        </div>
        <!-- /team -->
    


        <?php get_template_part('content', 'service-map'); ?>
    </div>
    <!--/site__content-->

<?php get_footer(); ?>
