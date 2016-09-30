<?php
/**
 * Template Name: Home Page
 */
get_header(); ?>

<!-- site__index-page -->
<div class="site__index-page" id="fullpage">

    <div class="slide__content">
        <div class="slide__content-inner">
            <div>

                <!-- main-slider -->
                <div class="main-slider">

                    <!-- swiper-container -->
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide swiper-slide_vegetable">

                                <div class="vegetables vegetable1 move1">
                                    <img src="<?= DIRECT ?>img/vegetable1.png" alt="">
                                </div>
                                <div class="vegetables vegetable2 move2">
                                    <img src="<?= DIRECT ?>img/vegetable2.png" alt="">
                                </div>
                                <div class="vegetables vegetable3 move3">
                                    <img src="<?= DIRECT ?>img/vegetable3.png" alt="">
                                </div>
                                <div class="vegetables vegetable4 move4">
                                    <img src="<?= DIRECT ?>img/vegetable4.png" alt="">
                                </div>
                                <div class="vegetables vegetable5 move5">
                                    <img src="<?= DIRECT ?>img/vegetable5.png" alt="">
                                </div>

                                <h2 class="site__main-title">
                                    VV Supremo
                                </h2>

                                <!-- main-slider__content -->
                                <div class="main-slider__content">
                                    <div>

                                        <!-- main-slider__pic -->
                                        <div class="main-slider__pic">
                                            <img src="<?= DIRECT ?>pic/supreme-pic1.png" width="499" height="500" alt="">
                                        </div>
                                        <!-- /main-slider__pic -->

                                        <!-- main-slider__text -->
                                        <div class="main-slider__text">
                                            <h2 class="site__title">VV Supremo</h2>
                                            <p>CORPORATE PORTAL</p>

                                            <a href="#" class="btn">LEARN MORE</a>
                                        </div>
                                        <!-- /main-slider__text -->

                                    </div>
                                </div>
                                <!-- /main-slider__content -->

                            </div>
                            <div class="swiper-slide">

                                <div class="vegetables vegetable1 move1">
                                    <img src="<?= DIRECT ?>img/vegetable2.png" alt="">
                                </div>
                                <div class="vegetables vegetable2 move2">
                                    <img src="<?= DIRECT ?>img/vegetable4.png" alt="">
                                </div>
                                <div class="vegetables vegetable3 move3">
                                    <img src="<?= DIRECT ?>img/vegetable3.png" alt="">
                                </div>
                                <div class="vegetables vegetable4 move4">
                                    <img src="<?= DIRECT ?>img/vegetable1.png" alt="">
                                </div>
                                <div class="vegetables vegetable5 move5">
                                    <img src="<?= DIRECT ?>img/vegetable5.png" alt="">
                                </div>

                                <h2 class="site__main-title">
                                    Lorem Lorem
                                </h2>

                                <!-- main-slider__content -->
                                <div class="main-slider__content">
                                    <div>

                                        <!-- main-slider__pic -->
                                        <div class="main-slider__pic">
                                            <img src="<?= DIRECT ?>pic/supreme-pic1.png" width="499" height="500" alt="">
                                        </div>
                                        <!-- /main-slider__pic -->

                                        <!-- main-slider__text -->
                                        <div class="main-slider__text">
                                            <h2 class="site__title">Lorem Lorem</h2>
                                            <p>Lorem Lorem Lorem</p>

                                            <a href="#" class="btn">LEARN MORE</a>
                                        </div>
                                        <!-- /main-slider__text -->

                                    </div>
                                </div>
                                <!-- /main-slider__content -->

                            </div>
                        </div>
                        <!-- Add Pagination -->
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>


                        <a href="#" class="main-slider__btn-down">down</a>

                    </div>
                    <!-- /swiper-container -->

                </div>
                <!-- /main-slider -->

            </div>
        </div>
    </div>

    <?php get_template_part('content', 'services'); ?>

    <?php get_template_part('content', 'squad'); ?>

    <?php get_template_part('content', 'clients'); ?>

    <?php get_template_part('content', 'reviews'); ?>

    <?php get_template_part('content', 'home-map'); ?>

</div>
<!-- /site__index-page -->

<?php get_footer(); ?>
