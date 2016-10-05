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

                            <?php  elseif($get_choose_type=='laptop'):
                                if($image = get_sub_field('laptop_block')):
                                    
                                    $imageID = $image['ID'];
                                    $alt = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                    $description = $image['description'];
                                    $url = $image['url'];
                                ?>

                                <!--laptop-->
                                <div class="laptop" style="background-image: url('<?= DIRECT ?>pic/laptop_pic.png')">

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
                            <?php  endif;  ?>

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
