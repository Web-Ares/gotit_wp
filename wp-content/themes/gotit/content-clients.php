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

                                           $image = getAcfImages(get_sub_field('choose_the_logos_of_clients'))
                                           ?>

                                                <div class="swiper-slide">

                                               <!-- our-clients__logo -->
                                               <a href="<?php the_sub_field('links_to_the_clients_resources') ?>" class="our-clients__logo">

                                                   <img src="<?= $image['url'] ?>" width="125" height="68" title="<?= $image['description'] ?>" alt="<?= $image['alt'] ?>">

                                               </a>
                                               <!-- /our-clients__logo -->

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
    



