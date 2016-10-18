


        <!-- contacts -->
        <div class="contacts contacts_services">

            <!-- contacts__inner -->
            <div class="contacts__inner">

                <?php
                $cities[0][0] = '40.71146768253324';
                $cities[0][1] = '-73.97688591796877';
                $cities[1][0] = '41.834052176036444';
                $cities[1][1] = '-87.73191400000002';

                $currentCity = rand(0,1);

                ?>
                <!-- contacts__map -->
                <div class="contacts__map">
                    <div class="contacts__map-google" id="contact-google-map" data-map-lat="<?= $cities[$currentCity][0] ?>" data-map-lng="<?= $cities[$currentCity][1] ?>" data-map-zoom="8"></div>
                </div>
                <!-- /contacts__map -->

                <!-- contacts__info -->
                <div class="contacts__info">

                    <a href="<?= get_the_permalink(42) ?>" class="btn btn_services btn_3">CONTACT US NOW</a>
                    <?php $phone = get_field('contact_phone',42) ?>
                    <h2 class="contacts__title">
                        <?= ($slogan = get_field('slogan_in_contact_block_on_footer'))? $slogan : $slogan ; ?>
                    </h2>

                    <div class="contacts__links">
                        <div>
                            <a href="tel:<?= $phone ?>" class="btn btn_2 contacts__links-phone"><span></span> <?= $phone ?> <span> </span></a>
                        </div>
                    </div>

                    <div class="contacts__pulse">
                        <div class="contacts__pulse1"></div>
                    </div>

                </div>
                <!-- /contacts__info -->

            </div>
            <!-- /contacts__inner -->

        </div>
        <!-- /contacts -->