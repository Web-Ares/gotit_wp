    


    <!-- main-slider -->
    <div class="main-slider">

        <!-- swiper-container -->
        <div class="swiper-container">

            <div class="swiper-wrapper">


                <?php

                if( have_rows('case_header_slider_constructor') ): ?>

                    <?php  while ( have_rows('case_header_slider_constructor') ) : the_row(); ?>



                        <div class="swiper-slide">

                            

                            <?php if($image = get_sub_field('choose_the_image_for_preview')){
                                $image_url_back = $image['url'];
                            } else {
                                $image_url_back = '';
                            }?>

                            <!--main-slider__inner-pic-->
                            <div class="main-slider__inner-pic"  style="background-image: url(<?= $image_url_back ?>);">

                                <!--main-slider__text-->
                                <div class="main-slider__text">
                                    <h2 class="site__title"><?php the_title() ?></h2>
                                    <p><?php the_sub_field('description_text') ?></p>
                                </div>
                                <!--/main-slider__text-->
                            
                            <?php
                            $move_num = 1;
                            if( have_rows('mobile_settings') ):

                                while ( have_rows('mobile_settings') ) : the_row(); ?>

                                    <?php

                                    $dataString = '';
                                    $mobileImage = get_sub_field('choose_the_modile_image');
                                    $tableImage = get_sub_field('choose_the_modile_image_copy');
                                    $desktopImage = get_sub_field('choose_the_desktop_image');

                                    if($mobileImage){
                                        $mobileImageUrl = $mobileImage['url'];
                                        $mobileImageWidth = $mobileImage['width'];
                                        $mobileImageHeight = $mobileImage['height'];
                                    } else {
                                        $mobileImageUrl = '';
                                        $mobileImageWidth = '';
                                        $mobileImageHeight = '';
                                    }

                                    if($tableImage){
                                        $tableImageUrl = $tableImage['url'];
                                        $tableImageWidth = $tableImage['width'];
                                        $tableImageHeight = $tableImage['height'];
                                    } else {
                                        $tableImageUrl = '';
                                        $tableImageWidth = '';
                                        $tableImageHeight = '';
                                    }


                                    if($desktopImage){
                                        $desktopImageUrl = $desktopImage['url'];
                                        $desktopImageWidth = $desktopImage['width'];
                                        $desktopImageHeight = $desktopImage['height'];
                                    } else {
                                        $desktopImageUrl = '';
                                        $desktopImageWidth = '';
                                        $desktopImageHeight = '';
                                    }

                                    $dataString .= '[
                                                                                                    {
                                                                                                    "url":"'.$mobileImageUrl.'",
                                                                                                    "positions":
                                                                                                        {
                                                                                                        "'.get_sub_field('choose_vertical_side').'" : "'.get_sub_field('vertical_value_in_pixels').'",
                                                                                                        "'.get_sub_field('choose_horizontal_side').'" : "'.get_sub_field('horizontal_value_in_pixels').'",
                                                                                                        "width" : "'.$mobileImageWidth.'",
                                                                                                        "height" : "'.$mobileImageHeight.'"
                                                                                                        }
                                                                                                    },
                                                                                                    {
                                                                                                    "url":"'.$tableImageUrl.'",
                                                                                                    "positions":
                                                                                                        {
                                                                                                        "'.get_sub_field('choose_vertical_side_copy').'" : "'.get_sub_field('vertical_value_in_pixels_tablet').'",
                                                                                                        "'.get_sub_field('choose_horizontal_side_tablet').'" : "'.get_sub_field('horizontal_value_in_pixels_tablet').'",
                                                                                                        "width" : "'.$tableImageWidth.'",
                                                                                                        "height" : "'.$tableImageHeight.'"
                                                                                                        }
                                                                                                    },
                                                                                                    {
                                                                                                    "url":"'.$desktopImageUrl.'",
                                                                                                    "positions":
                                                                                                        {
                                                                                                        "'.get_sub_field('choose_vertical_side_desktop').'" : "'.get_sub_field('vertical_value_in_pixels_desktop').'",
                                                                                                        "'.get_sub_field('choose_horizontal_side_desktop').'" : "'.get_sub_field('horizontal_value_in_pixels_desktop').'",
                                                                                                        "width" : "'.$desktopImageWidth.'",
                                                                                                        "height" : "'.$desktopImageHeight.'"
                                                                                                        }
                                                                                                    }
                                                                                                ]'; ?>


                                    <div class="vegetables  move move<?= $move_num ?>" data-views='<?= $dataString ?>'></div>

                                    <?php   $move_num++; endwhile;
                            endif; ?>

                                </div>
  

                        </div>

                        <?php

                    endwhile; ?>

                <?php     endif; ?>


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