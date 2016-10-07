<?php if($reviewsIds = get_field('choose_the_reviews_for_slider_on_this_page')): ?>

    <!-- reviews -->
    <div class="reviews <?= (is_singular('case'))?  'reviews_inner' : '' ; ?>">
        <div class="reviews__inner">

            <h2 class="site__title site__title_2"><?= ($title = get_field('reviews_title_block',5))? $title : 'And their reviews:';  ?></h2>

            <!-- reviews__items -->
            <div class="reviews__items">
                <div>

                    <!-- swiper-container -->
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <?php
                            $tmp = $post;
                            $reviews = getReviews($reviewsIds);
                            if(!is_null($reviews)){ ?>

                           <?php
                            foreach ($reviews as $post) {
                              

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

                            <?php 
                            }

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

<?php endif; ?>