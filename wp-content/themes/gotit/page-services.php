<?php
/**
 * Template Name: All Services Page
 */
get_header(); ?>



<?php $services = getServices();
        $backgroundWord = get_field('fill_the_word_for_background');
        $titlePage = get_the_title();
?>

    <div class="site__content centered">
    <div>

        <h2 class="site__main-title">
            <?= ($backgroundWord)? $backgroundWord :  $titlePage; ?>
        </h2>

        <!-- expertise -->
        <div class="expertise expertise_2">
            <div class="expertise__inner">

                <h1 class="site__title site__title_3 site__content-title"><?= $titlePage ?></h1>

                <!-- expertise__items -->
                <div class="expertise__items">

                    <!-- swiper-container -->
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <?php if($services): ?>
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
                                                <a href="<?php the_permalink(); ?>" class="expertise__item">

                                                    <!-- expertise__pic -->
                                                    <div class="expertise__pic">

                                                        <img src="<?= $image['url'] ?>" width="85" height="75" title="<?= $image['description'] ?>" alt="<?= $image['alt'] ?>">

                                                    </div>
                                                    <!-- /expertise__pic -->

                                                    <span><?php the_title(); ?></span>

                                                </a>
                                                <!-- /expertise__item -->

                                            </div>

                                        <?php }
                                        $post=$tmp;?>

                                    </div>
                                </div>
                            <?php endif; ?>
 
                        </div>
                    </div>

                </div>
                <!-- /expertise__items -->

            </div>
        </div>
        <!-- /expertise -->

    </div>
</div>



<?php get_footer(); ?>
