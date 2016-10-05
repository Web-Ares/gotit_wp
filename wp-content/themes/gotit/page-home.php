<?php
/**
 * Template Name: Home Page
 */
get_header(); ?>

<!-- site__index-page -->
<div class="site__index-page" id="fullpage">
    
    <?php get_template_part('content', 'main-slider'); ?>
    
    <?php get_template_part('content', 'services'); ?>

    <?php get_template_part('content', 'squad'); ?>

    <?php get_template_part('content', 'clients'); ?>

    <?php if(get_field('choose_the_reviews_for_slider_on_this_page')): ?>
        
    <div class="slide__content">
        <div class="slide__content-inner">
            <div>
    
                <?php get_template_part('content', 'reviews'); ?>

            </div>
        </div>
    </div>
        
    <?php endif; ?>
    
    <div class="slide__content">
        <div class="slide__content-inner">
            <div>
    
                <?php get_template_part('content', 'home-map'); ?>
                
            </div>
        </div>
    </div>
    
</div>
<!-- /site__index-page -->

<?php get_footer(); ?>
