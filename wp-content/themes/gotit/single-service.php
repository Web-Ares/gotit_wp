<?php get_header(); ?>


<?php
$services_content = get_field('services_content');
$backgroundWord = get_field('fill_the_word_for_background');
$titlePage = get_the_title();
$idService = get_the_ID();
$allServices = getServices();
?>

    <!--site__content-->
    <div class="site__content">

        <h2 class="site__main-title site__main-title_inner">
            <?= ($backgroundWord)? $backgroundWord :  $titlePage; ?>
        </h2>

        <!-- expertise -->
        <div class="expertise expertise_3">

            <div class="expertise__inner">

                <h1 class="site__title site__title_3 site__content-title"><?= get_the_title(38); ?></h1>

                <!-- expertise__items -->
                <div class="expertise__items">
            <?php if($allServices):

                $tmp  = $post ?>
                    <!-- swiper-container -->
                    <div class="swiper-container">
                        <div class="swiper-wrapper">

                            <?php foreach ($allServices as $post) {

                                $postID = get_the_ID();
                                $permalink = get_the_permalink();
                                switch ($idService){
                                    case  ($postID) : $active = ' active'; $flag = true;
                                        break;
                                    default :  $active = ''; $flag = false;
                                        break;
                                }

                                $image = getAcfImages(get_field('choose_the_preview_icon'));
                                ?>

                                <div class="swiper-slide">

                                        <?php if(!$flag): ?>

                                        <!-- expertise__item -->
                                        <a href="<?php the_permalink() ?>" data-id="<?= $postID ?>"  data-name="<?= $permalink ?>" class="expertise__item <?= $active ?>">

                                        <?php else:  ?>

                                        <!-- expertise__item -->
                                        <span data-id="<?= $postID ?>" data-name="<?= $permalink ?>" class="expertise__item  <?= $active ?>">

                                        <?php endif;?>


                                            <!-- expertise__pic -->
                                            <div class="expertise__pic">

                                                <img src="<?= $image['url'] ?>" <?= $image['description'] ?> width="85" height="75" <?= $image['url'] ?>>

                                            </div>
                                            <!-- /expertise__pic -->

                                        <span><?php the_title() ?></span>

                                            <?php if(!$flag): ?>
                                        </a>
                                        <!-- /expertise__item -->
                                        <?php else:  ?>
                                        </span>
                                        <!-- /expertise__item -->
                                        <?php endif;?>


                                </div>

                           <?php  } ?>

                        </div>
                    </div>
            <?php endif;
            $post = $tmp;
            ?>
                </div>
                <!-- /expertise__items -->

            </div>

        </div>
        <!-- /expertise -->
        
        <?php get_template_part('content', 'service-inner'); ?>
        <?php get_template_part('content', 'service-map'); ?>
        
    </div>
    <!--/site__content-->

<?php get_footer(); ?>


