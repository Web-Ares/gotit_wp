<!-- Content Services -->

<?php $services   = getServices();

if(!is_null($services)): ?>

    <div class="slide__content">
        <div class="slide__content-inner">
            <div>

            <!-- expertise -->
            <div class="expertise">
                <div class="expertise__inner">

                    <h2 class="site__title site__title_2"><?= ($title_services = get_field('services_title_block'))? $title_services  : 'Expertise' ; ?></h2>

                    <!-- expertise__items -->
                    <div class="expertise__items">

                        <!-- swiper-container -->
                        <div class="swiper-container">
                            <div class="swiper-wrapper">


                                    <?php
                                    $tmp = $post;
                                    $default_path  = DIRECT.'pic/expertise1.png';
                                    foreach ($services as $post){

                                        $image = getAcfImages(get_field('choose_the_preview_icon')); ?>

                                            <div class="swiper-slide">

                                                <!-- expertise__item -->
                                                <a href="<?php the_permalink() ?>" class="expertise__item">

                                                    <!-- expertise__pic -->
                                                    <div class="expertise__pic">

                                                        <img src="<?= ($image['url'])? $image['url'] : $default_path ?>" alt="<?= $image['alt'] ?>" title="<?= $image['description'] ?>">

                                                    </div>
                                                    <!-- /expertise__pic -->

                                                    <span><?php the_title(); ?></span>

                                                </a>
                                                <!-- /expertise__item -->

                                            </div>

                                    <?php  }
                                    $post = $tmp; ?>

                                </div></div>
                        </div>

                    </div>
                    <!-- /expertise__items -->

            </div>
            <!-- /expertise -->

            </div>
        </div>
    </div>

<?php endif; ?>