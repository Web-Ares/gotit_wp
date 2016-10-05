<?php get_header(); ?>

<?php
$title = get_the_title();
$wordBack = get_field('title_for_background',40);
$blogHome  = get_permalink(40);
?>

<?php if( have_rows('content_block') ):

  while ( have_rows('content_block') ) : the_row();
    $type = get_sub_field('choose_the_type_of_block');
    ?>

    <?php if($type =='text'): ?>

      <?php the_sub_field('content_block') ?>

    <?php elseif($type =='full'): ?>

      <?php the_sub_field('full_width_image') ?>

    <?php endif; ?>

    <?php

  endwhile;
endif; ?>

Share This
<h1>123123123123123</h1>
<?php $links = getSocialLinks(get_the_ID()); ?>
<a href="<?= $links['facebook'] ?>">FaceBook</a>
<a href="<?= $links['twitter'] ?>">Twitter</a>
<a href="<?= $links['google'] ?>">Google+</a>
<a href="<?= $links['in'] ?>">IN</a>



<?php get_footer(); ?>
