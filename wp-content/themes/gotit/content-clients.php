<?php if( have_rows('our_clients') ): ?>

    <div class="slide__content">
        <div class="slide__content-inner">
            <div>

                <!-- our-clients -->
                <div class="our-clients">
                    <div class="our-clients__inner">

                        <h2 class="site__title site__title_2"><?= ($title = get_field('clients_title_block'))? $title : 'Our Clients';  ?></h2>

                        <!-- our-clients__items -->
                        <div class="our-clients__items">

                            <!-- swiper-container -->
                            <div class="swiper-container">
                                <div class="swiper-wrapper">

                                       <?php  while ( have_rows('our_clients') ) : the_row();

                                           $image = getAcfImages(get_sub_field('choose_the_logos_of_clients'));

                                           $links_to_client = get_sub_field('links_to_the_clients_resources');
                                           ?>

                                                <div class="swiper-slide">

                                               <?php if($links_to_client){ ?>

                                                   <!-- our-clients__logo -->
                                                   <a href="<?= $links_to_client ?>" class="our-clients__logo">

                                                       <?php $image_w = get_sub_field('choose_the_logos_of_clients');
                                                       if($image_w):
                                                           ?>

                                                           <img src="<?= $image['url'] ?>" width="<?= $image_w['width']/2 ?>" height="<?= $image_w['height']/2 ?>" title="<?= $image['description'] ?>" alt="<?= $image['alt'] ?>">
                                                       <?php endif; ?>
                                                   </a>
                                                   <!-- /our-clients__logo -->


                                              <?php  } else { ?>

                                                   <!-- our-clients__logo -->
                                                   <span class="our-clients__logo">

                                                       <?php $image_w = get_sub_field('choose_the_logos_of_clients');
                                                       if($image_w):
                                                           ?>

                                                           <img src="<?= $image['url'] ?>" width="<?= $image_w['width']/2 ?>" height="<?= $image_w['height']/2 ?>" title="<?= $image['description'] ?>" alt="<?= $image['alt'] ?>">
                                                       <?php endif; ?>
                                                   </span>
                                                   <!-- /our-clients__logo -->

                                             <?php   } ?>
                                                    
                                           </div>

                                            <?php

                                        endwhile; ?>
                                </div>
                                <!-- Add Arrows -->
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>

                            </div>

                        </div>
                        <!-- /our-clients__items -->

                    </div>
                </div>
                <!-- /our-clients -->

            </div>
        </div>
    </div>

<?php endif; ?>
    



