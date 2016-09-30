


        <!-- contacts -->
        <div class="contacts contacts_services">

            <!-- contacts__inner -->
            <div class="contacts__inner">

                <!-- contacts__map -->
                <div class="contacts__map">
                    <div class="contacts__map-google" id="contact-google-map" data-map-lat="40.71146768253324" data-map-lng="-73.97688591796877" data-map-zoom="8"></div>
                </div>
                <!-- /contacts__map -->

                <!-- contacts__info -->
                <div class="contacts__info">

                    <a href="<?= get_the_permalink(42) ?>" class="btn btn_services btn_3">CONTACT US NOW</a>
                    <?php $phone = get_field('contact_phone',42) ?>
                    <h2 class="contacts__title">Make the Move,
                        Upgrade your digital presence.</h2>

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