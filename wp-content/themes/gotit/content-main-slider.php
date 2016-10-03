

      <div class="slide__content">
    <div class="slide__content-inner">
        <div>

            <!-- main-slider -->
            <div class="main-slider main-slider_index">


                <!-- swiper-container -->
                <div class="swiper-container">
                    <div class="swiper-wrapper">


                        <?php

                        if( have_rows('image_constructor') ): ?>

                           <?php  while ( have_rows('image_constructor') ) : the_row(); ?>


                                
                                <div class="swiper-slide">

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




                                    <h2 class="site__main-title">
                                        <?php the_sub_field('background_word') ?>
                                    </h2>

                                    <!-- main-slider__content -->
                                    <div class="main-slider__content">
                                        <div>


                                            <?php
                                            $image = get_sub_field('choose_the_image_for_preview');
                                            $imageID = $image['ID'];
                                            $alt = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                            $description = $image['description'];
                                            $url = $image['url'];

                                            ?>

                                            <?php if($image): ?>
                                            <!-- main-slider__pic -->
                                            <div class="main-slider__pic">
                                                <img src="<?= $url ?>" width="499" height="500" title="<?= $description ?>" alt="<?= $alt ?>">
                                            </div>
                                            <!-- /main-slider__pic -->
                                            <?php endif; ?>
                                            <?php $idCase = get_sub_field('choose_the_case'); ?>
                                            <!-- main-slider__text -->
                                            <div class="main-slider__text">
                                                <h2 class="site__title"><?= get_the_title($idCase) ?></h2>
                                                <p><?php the_sub_field('description_text') ?></p>

                                                <a href="<?= get_permalink($idCase) ?>" class="btn">LEARN MORE</a>
                                            </div>
                                            <!-- /main-slider__text -->

                                        </div>
                                    </div>
                                    <!-- /main-slider__content -->

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

        </div>
    </div>
</div>