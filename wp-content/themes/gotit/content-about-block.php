<div class="slide__content slide__content_about" style="background-image: url('<?php the_field('background_image') ?>')">
    <div class="slide__content-inner">
        <div>

            <!-- about -->
            <div class="about">
                <div class="about__inner">

                    <h2 class="site__title site__title_2"><?php the_field('title_about') ?></h2>

                    <!-- about__content -->
                    <div class="about__content">

                       <?php the_field('about_content_block') ?>

                        <a href="<?= get_permalink('42') ?>" class="btn btn_8">contact us</a>
                    </div>
                    <!-- /about__content -->

                    <div class="about__sub-title">
                        <?php the_field('aside_text_block') ?>
                    </div>

                </div>
            </div>
            <!-- /about -->

        </div>
    </div>
</div>