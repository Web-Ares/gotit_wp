<?php
/**
 * Template Name: Home Page
 */
get_header(); ?>

<?php
//    $tmp = $post;
//    $services = getServices();
//    foreach ($services as $post){
//        the_title();
//        $choose_the_preview_icon = get_field('choose_the_preview_icon');
//    }
//    $post = $tmp;
//?>

<!-- site__index-page -->
<div class="site__index-page">
    
<!-- site__index-swiper -->
<div class="site__index-swiper swiper-container">
    <div class="swiper-wrapper">
        
        <div class="swiper-slide">
            <div class="swiper-slide__content">

                <!-- main-slider -->
                <div class="main-slider">

                    <div class="vegetables vegetable1"></div>
                    <div class="vegetables vegetable2"></div>
                    <div class="vegetables vegetable3"></div>
                    <div class="vegetables vegetable4"></div>
                    <div class="vegetables vegetable5"></div>

                    <h2 class="site__main-title">
                        VV Supremo
                    </h2>

                    <!-- swiper-container -->
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">

                                <!-- main-slider__content -->
                                <div class="main-slider__content">
                                    <div>

                                        <!-- main-slider__pic -->
                                        <div class="main-slider__pic">
                                            <img src="pic/supreme-pic1.png" width="499" height="500" alt="">
                                        </div>
                                        <!-- /main-slider__pic -->

                                        <!-- main-slider__text -->
                                        <div class="main-slider__text">
                                            <h2 class="site__title">VV Supremo</h2>
                                            <p>CORPORATE PORTAL</p>

                                            <a href="#" class="btn"><span>LEARN MORE</span></a>
                                        </div>
                                        <!-- /main-slider__text -->

                                    </div>
                                </div>
                                <!-- /main-slider__content -->

                            </div>
                            <div class="swiper-slide">

                                <!-- main-slider__content -->
                                <div class="main-slider__content">
                                    <div>

                                        <!-- main-slider__pic -->
                                        <div class="main-slider__pic">
                                            <img src="pic/supreme-pic1.png" width="499" height="500" alt="">
                                        </div>
                                        <!-- /main-slider__pic -->

                                        <!-- main-slider__text -->
                                        <div class="main-slider__text">
                                            <h2 class="site__title">VV Supremo</h2>
                                            <p>CORPORATE PORTAL</p>

                                            <a href="#" class="btn"><span>LEARN MORE</span></a>
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
        
        <?php get_template_part('content', 'services'); ?>
        
        <?php get_template_part('content', 'squad'); ?>

        <?php get_template_part('content', 'clients'); ?>

        <?php get_template_part('content', 'reviews'); ?>

        <?php get_template_part('content', 'footer-cart'); ?>

    </div>
</div>
<!-- /site__index-swiper -->

</div>
<!-- /site__index-page -->
<?php get_footer(); ?>
