<?php
/**
 * Template Name: Contact Page
 */
get_header(); ?>

        <div class="site__content centered">
    <div>

        <h2 class="site__main-title">
            <?= ($title=get_field('text_on_background'))? $title : get_the_title(); ?>
        </h2>

        <!-- contacts -->
        <div class="contacts contacts_2">

            <!-- contacts__map -->
            <div class="contacts__map">
                <div class="contacts__map-google" id="contact-google-map" data-map-lat="<?= $cities[$currentCity][0] ?>" data-map-lng="<?= $cities[$currentCity][1] ?>" data-map-zoom="8"></div>
            </div>
            <!-- /contacts__map -->
            
            <!-- contacts__inner -->
            <div class="contacts__inner">

                <?php
                $cities[0][0] = '40.71146768253324';
                $cities[0][1] = '-73.97688591796877';
                $cities[1][0] = '41.834052176036444';
                $cities[1][1] = '-87.73191400000002';

                $currentCity = rand(0,1);

                ?>
               

                <!-- contacts__info -->
                <div class="contacts__info">
                    <?php $phone = get_field('contact_phone') ?>
                    <p>call now:</p>
                    <div>
                        <a href="tel:<?= $phone; ?>" class="btn btn_2 contacts__links-phone"><?= $phone; ?></a>
                    </div>

                    <!-- contacts__addresses -->
                    <div class="contacts__addresses">
                        <address>
                            <?php if( have_rows('chicago_info_block') ): ?>
                                <div>
                                    <?php  while ( have_rows('chicago_info_block') ) : the_row(); ?>

                                        <span><?php  the_sub_field('new_text_info'); ?></span>
                                        <?php

                                    endwhile; ?>
                                </div>
                            <?php   endif; ?>
                            <?php if( have_rows('cities_info_block') ): ?>
                            <div>
                                      <?php  while ( have_rows('cities_info_block') ) : the_row(); ?>

                                          <span><?php  the_sub_field('new_text_info'); ?></span>
                                            <?php

                                        endwhile; ?>
                            </div>
                             <?php   endif; ?>

                        </address>
                    </div>
                    <!-- /contacts__addresses -->

                    <!-- contacts__form -->
                    <div class="contacts__form">

                           <?= do_shortcode('[contact-form-7 id="119" title="Contact form"]') ?>


                        <!-- contacts__success -->
                        <div class="contacts__success">
                            <p>Your message was sent successfully,
                                our representative will contact you shortly.</p>

                            <a href="#" class="btn btn_5">ok</a>
                        </div>
                        <!-- /contacts__success -->

                    </div>
                    <!-- /contacts__form -->


                    <!-- contacts__pulse -->
                    <div class="contacts__pulse">
                        <div class="contacts__pulse1"></div>
                    </div>
                    <!-- /contacts__pulse -->

                </div>
                <!-- /contacts__info -->

            </div>
            <!-- /contacts__inner -->

        </div>
        <!-- /contacts -->


    </div>
</div>

<?php get_footer(); ?>
