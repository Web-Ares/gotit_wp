
<div class="slide__content">
    <div class="slide__content-inner">
        <div>

            <!-- main-slider -->
            <div class="main-slider main-slider_index">

                <!-- swiper-container -->
                <div class="swiper-container">
                    <?php $cases = getCases();
                    if(!is_null($cases)):
                    ?>
                    <div class="swiper-wrapper">

                        <?php
                        $tmp = $post;
                        foreach ($cases as $post){

                                get_template_part('content', 'filter');

                        }
                        $post  =$tmp;
                        ?>


                        
                    </div>
                    <!-- Add Pagination -->
                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>


                    <a href="#" class="main-slider__btn-down">down</a>

                </div>
                <!-- /swiper-container -->
                <?php endif; ?>
            </div>
            <!-- /main-slider -->

        </div>
    </div>
</div>


