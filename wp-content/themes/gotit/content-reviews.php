<?php if($reviews = getReviews()): ?>



    <div class="slide__content">
        <div class="slide__content-inner">
            <div>

            <!-- reviews -->
            <div class="reviews">
                <div class="reviews__inner">

                    <h2 class="site__title site__title_2"><?= ($title = get_field('reviews_title_block'))? $title : 'And their reviews:';  ?></h2>

                    <!-- reviews__items -->
                    <div class="reviews__items">
                        <div>

                            <!-- swiper-container -->
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <?php
                                    $tmp = $post;
                                    foreach ($reviews as $post) {
                                        if(is_front_page() && get_field('show_on_home_page')=='show' || is_page_template('page-services.php') && get_field('show_on_services_page')=='show'):

                                        $image = getImagesAttributes('thumb',get_post_thumbnail_id());

                                        ?>

                                        <div class="swiper-slide">

                                            <!-- reviews__item -->
                                            <div class="reviews__item">

                                                <!-- reviews__info -->
                                                <div class="reviews__info">

                                                    <div class="reviews__pic">
                                                        <img src="<?= $image['url'] ?>" width="145" height="145" title="<?= $image['description'] ?>" alt="<?= $image['alt'] ?>">
                                                    </div>
                                                                <span>
                                                                    <?php the_field('the_author_name'); ?>
                                                                </span>

                                                </div>
                                                <!-- /reviews__info -->

                                                <!-- reviews__text -->
                                                <div class="reviews__text">
                                                    <p>
                                                        <?php the_field('review_text'); ?>
                                                    </p>
                                                </div>
                                                <!-- /reviews__text -->


                                            </div>
                                            <!-- /reviews__item -->

                                        </div>

                                    <?php endif;
                                    }
                                    $post = $tmp;
                                    ?>

                                </div>

                            </div>

                        </div>

                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>

                    </div>
                    <!-- /reviews__items -->

                </div>
            </div>
            <!-- /reviews -->

        </div>
    </div>
</div>

<?php endif; ?>