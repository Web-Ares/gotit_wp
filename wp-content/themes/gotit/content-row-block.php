

<?php if(get_sub_field('choose_type')=='text'): ?>

    <!--case__sliders-text-->
    <div class="case__sliders-text">

        <?php the_sub_field('add_text_item') ?>

    </div>
    <!--/case__sliders-text-->

<?php elseif(get_sub_field('choose_type')=='image'):
    $image = get_sub_field('add_image');
    $imageID = $image['ID'];
    $alt = get_post_meta($imageID , '_wp_attachment_image_alt', true);
    $description = $image['description'];
    $url = $image['url'];
    ?>

    <img src="<?= $url ?>" alt="<?= $alt ?>" title="<?= $description ?>">

<?php endif; ?>




