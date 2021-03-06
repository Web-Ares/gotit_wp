

            <!-- contacts -->
            <div class="contacts">

                <!-- contacts__map -->
                <div class="contacts__map">
                    <div class="contacts__map-google" id="contact-google-map" data-map-lat="40.71146768253324" data-map-lng="-73.97688591796877" data-map-zoom="9"></div>
                </div>
                <!-- /contacts__map -->

                <!-- contacts__inner -->
                <div class="contacts__inner">

                    <!-- contacts__info -->
                    <div class="contacts__info">
                        <div>
                        <h2 class="contacts__title">
                            <?= ($slogan = get_field('slogan_in_contact_block_on_footer'))? $slogan : $slogan; ?>
                        </h2>
                        <?php $phone = get_field('contact_phone',42) ?>
                        <div class="contacts__links">
                            <div>
                                <a href="tel:<?= $phone ?>" class="btn btn_2 contacts__links-phone"><span>CALL </span> <?= $phone ?> <span> NOW</span></a>
                            </div>
                            <div>
                                <a href="<?= get_the_permalink(42) ?>" class="btn btn_2">CONTACT PAGE</a>
                            </div>
                        </div>
                        </div>

                        <div class="contacts__pulse">
                            <div class="contacts__pulse1"></div>
                        </div>

                        <div>
                        <p><?php the_field('location_preview_text_in_footer',5) ?></p>

                        <!-- contacts__cities -->
                        <div class="contacts__cities">
                            <a href="#" class="btn btn_2 active" data-map-lat="40.71146768253324" data-map-lng="-73.97688591796877">
                                NEW YORK
                            </a>
                            <a href="#" class="btn btn_2" data-map-lat="41.834052176036444" data-map-lng="-87.73191400000002">
                                CHICAGO
                            </a>
                        </div>
                        <!-- /contacts__cities -->
                        </div>
                    </div>
                    <!-- /contacts__info -->

                </div>
                <!-- /contacts__inner -->

            </div>
            <!-- /contacts -->

