<?php
/**
 * Template Name: All Services Page
 */
get_header(); ?>

<div class="site__content">

    <h2 class="site__main-title">
        Services
    </h2>

    <?php if($services = getServices()): ?>
    <!-- expertise -->
    <div class="expertise expertise_2">
        <div class="expertise__inner">

            <h1 class="site__title site__title_3 site__content-title"><?php the_title(); ?></h1>

            <!-- expertise__items -->
            <div class="expertise__items">

                <!-- swiper-container -->
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <?php
                        $tmp = $post;
                        foreach ($services as $post) {

                            $image = getAcfImages(get_field('choose_the_preview_icon'));
                        
                            ?>

                            <div class="swiper-slide">

                                <!-- expertise__item -->
                                <div class="expertise__item">

                                    <!-- expertise__pic -->
                                    <div class="expertise__pic">

                                        <img src="<?= $image['url'] ?>" width="70" height="66" alt="<?=$image['alt'] ?>" title="<?= $image['description'] ?>">

                                    </div>
                                    <!-- /expertise__pic -->

                                    <span><?php the_title(); ?></span>

                                </div>
                                <!-- /expertise__item -->

                            </div>

                        <?php }
                        $post=$tmp;?>

                    </div>
                </div>

            </div>
            <!-- /expertise__items -->

        </div>
    </div>
    <!-- /expertise -->
    <?php endif; ?>
</div>

<?php get_footer(); ?>
