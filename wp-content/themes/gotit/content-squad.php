<?php $teammates = getTeammates(3);
if($teammates):
?>
    <div class="slide__content">
        <div class="slide__content-inner">
            <div>

            <!-- squad -->
            <div class="squad">
                
                <div class="squad__disk"></div>
                
                <div class="squad__inner">

                    <h2 class="site__title site__title_2"><?= ($title = get_field('squad_title_block'))? $title : 'Squad';  ?></h2>

                    <!-- squad__items -->
                    <div class="squad__items">

                        <!-- swiper-container -->
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <?php
                                $tmp = $post;
                                foreach ($teammates as $post){
                                    $id = get_post_thumbnail_id();

                                    $attr = getImagesAttributes('thumb',$id);
                                    ?>

                                    <div class="swiper-slide">

                                        <!-- squad__item -->
                                        <div class="squad__item">

                                            <!-- squad__pic -->
                                            <div class="squad__pic">

                                                <img src="<?= $attr['url'] ?>" width="265" height="265"  alt="<?= $attr['alt'] ?>" title="<?= $attr['description'] ?>">

                                            </div>
                                            <!-- /squad__pic -->

                                            <span class="squad__name"><?php the_title(); ?></span>
                                            <span class="squad__post"><?php the_field('position'); ?></span>

                                        </div>
                                        <!-- /squad__item -->

                                    </div>

                                <?php }
                                $post = $tmp;
                                ?>

                            </div>
                        </div>

                    </div>
                    <!-- /squad__items -->

                    <a href="<?= get_the_permalink(63) ?>" class="btn"><span>LEARN MORE</span></a>

                </div>
            </div>
            <!-- /squad -->

        </div>
    </div>
</div>
    
<?php endif; ?>