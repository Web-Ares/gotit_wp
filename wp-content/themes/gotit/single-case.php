<?php get_header(); ?>


<!--site__content-->
<div class="site__content centered">

    <!--case-->
    <div class="case">

        <?php get_template_part('content', 'slider-case'); ?>

        <!--case__wrap-->
        <div class="case__wrap">

            <?php if( have_rows('content_block') ):
                        $showed = false;
                        while ( have_rows('content_block') ) : the_row();
                            $get_choose_type = get_sub_field('choose_the_type_of_content');
                            ?>

                            <?php  if($get_choose_type=='text'): ?>

                                <!--case__inner-->
                                <div class="case__inner">

                                    <?php the_sub_field('content_block') ?>

                                </div>
                                <!--/case__inner-->

                            <?php  
                            elseif($get_choose_type=='text_image'):
                                $textPosition = get_sub_field('choose_the_position_of_text');
                                ?>
                                <?php
                                if($textPosition=='left'):
                                $class = 'alignright';
                                    $classContent='';
                                else:
                                    $class = 'alignleft';
                                    $classContent = 'case__content_margin';
                                endif;

                                $mainImage = get_sub_field('choose_the_image');
                                $imageID = $mainImage['ID'];
                                $alt = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                $description = $mainImage['description'];
                                $url = $mainImage['url'];

                                $attachedImages = get_sub_field('choose_the_image_under_the_text');
                                if($attachedImages){
                                    $rt = $attachedImages['ID'];
                                    $attachedImagesAlt = get_post_meta( $rt , '_wp_attachment_image_alt', true);
                                }

                                ?>

                                        <!--case__sliders-->
                                        <div class="case__content <?= $classContent ?>">
                                            <?php if($mainImage): ?>
                                                <img src="<?= $url ?>"  class="<?= $class ?>" width="<?= $mainImage['width']/2 ?>" height="<?= $mainImage['height']/2 ?>" title="<?= $description ?>" alt="<?= $alt ?>">
                                            <?php endif; ?>
                                            <!--case__sliders-text-->
                                            <div class="case__content-text">

                                                <?php the_sub_field('fill_the_text') ?>

                                            </div>
                                            <!--/case__sliders-text-->


                                            <?php if($attachedImages): ?>
                                            <!--case__content-icons-->
                                            <div class="case__content-icons">
                                                <img src="<?= $attachedImages['url'] ?>"  width="<?= $attachedImages['width']/2 ?>" height="<?= $attachedImages['height']/2 ?>" title="<?= $attachedImages['description'] ?>" alt="<?= $attachedImagesAlt ?>">
                                            </div>
                                                <!--/case__content-icons-->
                                            <?php endif; ?>

                                        </div>
                                        <!--/case__sliders-->

                            <?php

                        elseif($get_choose_type=='laptop'):
                                if($image = get_sub_field('laptop_block')):

                                    $imageID = $image['ID'];
                                    $alt = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                    $description = $image['description'];
                                    $url = $image['url'];
                                ?>

                                <!--laptop-->
                                <div class="laptop site__gradient" style="background-image: url('<?= DIRECT ?>pic/laptop_pic.png')">

                                    <img src="<?= $url ?>" alt="<?= $alt ?>" title="<?= $description ?>">

                                </div>
                                <!--/laptop-->

                            <?php  endif;
                            elseif($get_choose_type=='column'): ?>
                                <!--case__sliders-->
                                <div class="case__sliders">
                                <?php if( have_rows('two_columns_block') ): ?>

                                    <!--case__sliders-row-->
                                    <div class="case__sliders-row">

                                          <?php   while ( have_rows('two_columns_block') ) : the_row(); ?>

                                                    <?php get_template_part('content', 'row-block'); ?>

                                                <?php

                                            endwhile; ?>

                                    </div>
                                    <!--/case__sliders-row-->
                                      <?php  endif; ?>

                                <?php if( have_rows('second_column_block') ): ?>

                                    <!--case__sliders-row-->
                                    <div class="case__sliders-row">

                                    <?php   while ( have_rows('second_column_block') ) : the_row(); ?>

                                            <?php get_template_part('content', 'row-block'); ?>

                                        <?php

                                    endwhile; ?>

                                    </div>
                                    <!--/case__sliders-row-->

                                <?php  endif; ?>

                                </div>
                                <!--/case__sliders-->
                            <?php  elseif($get_choose_type=='mobile'):
                                if(!$showed){ ?>

                                    <!--phone-->
                                    <div class="phone">

                                        <!--phone__wrap-->
                                        <div class="phone__wrap">

                                            <!--pnone__part-->
                                            <div class="pnone__part pnone__part_1">

                                                <!--pnone__item-->
                                                <div class="pnone__item" style="background-image: url('<?= DIRECT ?>img/phone/phone-part_1.png')"></div>
                                                <!--/pnone__item-->

                                                <!--shadow-->
                                                <div class="shadow" style="background-image: url('<?= DIRECT ?>img/phone/phone-part-shadow_1.png')"></div>
                                                <!--/shadow-->

                                            </div>
                                            <!--/pnone__part-->

                                            <!--pnone__part-->
                                            <div class="pnone__part pnone__part_2">

                                                <!--pnone__item-->
                                                <div class="pnone__item phone__elem" data-translate="20.3" data-scale="0.869" style="background-image: url('<?= DIRECT ?>img/phone/phone-part_2.png')"></div>
                                                <!--/pnone__item-->

                                                <!--shadow-->
                                                <div class="shadow  phone__elem"  data-translate="10.2" data-scale="0.869" style="background-image: url('<?= DIRECT ?>img/phone/phone-part-shadow_2.png')"></div>
                                                <!--/shadow-->

                                            </div>
                                            <!--/pnone__part-->

                                            <!--pnone__part-->
                                            <div class="pnone__part pnone__part_3">

                                                <!--pnone__item-->
                                                <div class="pnone__item phone__elem" data-translate="37.3" data-scale="0.869" style="background-image: url('<?= DIRECT ?>img/phone/phone-part_3.png')"></div>
                                                <!--/pnone__item-->

                                                <!--shadow-->
                                                <div class="shadow phone__elem" data-translate="27.2" data-scale="0.869" style="background-image: url('<?= DIRECT ?>img/phone/phone-part-shadow_3.png')"></div>
                                                <!--/shadow-->

                                            </div>
                                            <!--/pnone__part-->

                                            <!--pnone__part-->
                                            <div class="pnone__part pnone__part_4">

                                                <!--pnone__item-->
                                                <div class="pnone__item phone__elem" data-translate="124.3" data-scale="0.869" style="background-image: url('<?= DIRECT ?>img/phone/phone-part_4.png')"></div>
                                                <!--/pnone__item-->

                                                <!--shadow-->
                                                <div class="shadow phone__elem" data-translate="91.2" data-scale="0.869" style="background-image: url('<?= DIRECT ?>img/phone/phone-part-shadow_4.png')"></div>
                                                <!--/shadow-->

                                            </div>
                                            <!--/pnone__part-->

                                            <!--pnone__part-->
                                            <div class="pnone__part pnone__part_5">

                                                <!--pnone__item-->
                                                <div class="pnone__item phone__elem" data-translate="801" data-scale="0.869" style="background-image: url('<?= DIRECT ?>img/phone/phone-part_5.png')"></div>
                                                <!--/pnone__item-->

                                                <!--shadow-->
                                                <div class="shadow phone__elem" data-translate="285" data-scale="0" style="background-image: url('<?= DIRECT ?>img/phone/phone-part-shadow_5.png')"></div>
                                                <!--/shadow-->

                                            </div>
                                            <!--/pnone__part-->

                                        </div>
                                        <!--/phone__wrap-->

                                    </div>
                                    <!--/phone-->

                                   <?php  $showed = true;
                                } else {
                                    continue;
                                }
                                ?>
                            <?php

                            elseif($get_choose_type=='animated_technique'): ?>
                                <!--case__sliders-->
                                <div class="case__content case__content_center">

                                    <!--case__sliders-text-->
                                    <div class="case__content-text">

                                        <?php the_sub_field('text_before_the_animated_block') ?>

                                    </div>
                                    <!--/case__sliders-text-->

                                </div>
                                <!--/case__sliders-->

                                <!--featured-products-->
                                <div class="featured-products">

                                    <div class="featured-products__disk"></div>
                                    <div class="featured-products__inner">

                                        <!-- featured-products__items -->
                                        <div class="featured-products__items">

                                            <!-- swiper-container -->
                                            <div class="swiper-container">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide swiper-slide_animated" data-start="90" data-finish="180">

                                                        <!-- featured-products__item -->
                                                        <div class="featured-products__item">

                                                            <!-- featured-products__pic -->
                                                            <div class="featured-products__pic">

                                                                <img src="<?= DIRECT ?>pic/product1.png" width="335" height="353" alt="">

                                                            </div>
                                                            <!-- /featured-products__pic -->

                                                        </div>
                                                        <!-- /featured-products__item -->

                                                    </div>
                                                    <div class="swiper-slide">

                                                        <!-- featured-products__item -->
                                                        <div class="featured-products__item">

                                                            <!-- featured-products__pic -->
                                                            <div class="featured-products__pic">

                                                                <img src="<?= DIRECT ?>pic/product2.png" width="234" height="378" alt="">

                                                            </div>
                                                            <!-- /featured-products__pic -->

                                                        </div>
                                                        <!-- /featured-products__item -->

                                                    </div>
                                                    <div class="swiper-slide swiper-slide_animated"  data-start="270" data-finish="360">

                                                        <!-- featured-products__item -->
                                                        <div class="featured-products__item">

                                                            <!-- featured-products__pic -->
                                                            <div class="featured-products__pic">

                                                                <img src="<?= DIRECT ?>pic/product3.png" width="404" height="486" alt="">

                                                            </div>
                                                            <!-- /featured-products__pic -->

                                                        </div>
                                                        <!-- /featured-products__item -->

                                                    </div>
                                                </div>
                                                <!-- Add Arrows -->
                                                <div class="swiper-button-next"></div>
                                                <div class="swiper-button-prev"></div>
                                            </div>

                                        </div>
                                        <!-- /featured-products__items -->

                                    </div>

                                </div>
                                <!--/featured-products-->
                          <?php   endif;  ?>

            <?php endwhile;
            endif; ?>

        </div>
        <!--/case__wrap-->

        <?php get_template_part('content', 'reviews'); ?>

        <?php get_template_part('content', 'home-map'); ?>

    </div>
    <!--/case-->

</div>
<!--/site__content-->

<?php get_footer(); ?>
