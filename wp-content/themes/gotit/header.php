<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="address=no">

    <title><?php wp_title(''); ?></title>
    <?php wp_head(); ?>
    
    <?php if (is_page() || is_single() || is_singular() || is_404() || is_tax() || is_category() || is_tax() ) {
        the_post();
    } ?>
    
</head>
<body>

<!-- site -->
<div class="site">

    <!-- site__header -->
    <header class="site__header">

        <!-- site__header-layout -->
        <div class="site__header-layout">
            
            <?php if(is_front_page()){ ?>
                <!-- logo -->
                <h1 class="logo logo_index"><img src="<?php echo DIRECT; ?>img/logo.png" width="354" height="63" alt="GotIT"></h1>
                <!-- /logo -->
            <?php } else {?>

                <!-- logo -->
                <a href="<?php echo home_url(); ?>" class="logo logo__inner">
                    <img src="<?php echo DIRECT; ?>img/logo__inner.png" width="142" height="43" alt="GotIT">
                </a>
                <!-- /logo -->
            <?php } ?>
            
            
            <!-- site__header__btn -->
            <button type="button" class="site__header__btn">
                <span></span>
            </button>
            <!-- /site__header__btn -->

            <!-- site__header-menu -->
            <div class="site__header-menu">

                <nav>
                <?php $locations = get_nav_menu_locations();
                $menu_items = wp_get_nav_menu_items($locations['menu']);

                foreach ((array)$menu_items as $key => $menu_item) {

                    if($post->ID==$menu_item->object_id){

                        $active = ' active';

                    } else {

                        $active = '';

                    }
                    $menu_title =  $menu_item->title;

                ?>

                <a class="<?= $active ?>" href="<?= $menu_item->url; ?>"><?= $menu_title;  ?></a>
                <?php

                }?>
                </nav>

                <div class="join">

                    <div class="join__social">
                        <?php if($twitter = get_field('twitter','options')): ?>
                        <a href="<?= $twitter;  ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 430.117 430.117" style="enable-background:new 0 0 430.117 430.117;" xml:space="preserve">
                                    <g>
                                        <path id="Twitter__x28_alt_x29_" d="M381.384,198.639c24.157-1.993,40.543-12.975,46.849-27.876   c-8.714,5.353-35.764,11.189-50.703,5.631c-0.732-3.51-1.55-6.844-2.353-9.854c-11.383-41.798-50.357-75.472-91.194-71.404   c3.304-1.334,6.655-2.576,9.996-3.691c4.495-1.61,30.868-5.901,26.715-15.21c-3.5-8.188-35.722,6.188-41.789,8.067   c8.009-3.012,21.254-8.193,22.673-17.396c-12.27,1.683-24.315,7.484-33.622,15.919c3.36-3.617,5.909-8.025,6.45-12.769   C241.68,90.963,222.563,133.113,207.092,174c-12.148-11.773-22.915-21.044-32.574-26.192   c-27.097-14.531-59.496-29.692-110.355-48.572c-1.561,16.827,8.322,39.201,36.8,54.08c-6.17-0.826-17.453,1.017-26.477,3.178   c3.675,19.277,15.677,35.159,48.169,42.839c-14.849,0.98-22.523,4.359-29.478,11.642c6.763,13.407,23.266,29.186,52.953,25.947   c-33.006,14.226-13.458,40.571,13.399,36.642C113.713,320.887,41.479,317.409,0,277.828   c108.299,147.572,343.716,87.274,378.799-54.866c26.285,0.224,41.737-9.105,51.318-19.39   C414.973,206.142,393.023,203.486,381.384,198.639z" fill="#FFFFFF"/>
                                    </g>
                                </svg>
                        </a>
                        <?php endif;
                        if($facebook = get_field('facebook','options')): ?>
                        <a href="<?= $facebook; ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 96.124 96.123" style="enable-background:new 0 0 96.124 96.123;" xml:space="preserve">
                                    <g>
                                        <path d="M72.089,0.02L59.624,0C45.62,0,36.57,9.285,36.57,23.656v10.907H24.037c-1.083,0-1.96,0.878-1.96,1.961v15.803   c0,1.083,0.878,1.96,1.96,1.96h12.533v39.876c0,1.083,0.877,1.96,1.96,1.96h16.352c1.083,0,1.96-0.878,1.96-1.96V54.287h14.654   c1.083,0,1.96-0.877,1.96-1.96l0.006-15.803c0-0.52-0.207-1.018-0.574-1.386c-0.367-0.368-0.867-0.575-1.387-0.575H56.842v-9.246   c0-4.444,1.059-6.7,6.848-6.7l8.397-0.003c1.082,0,1.959-0.878,1.959-1.96V1.98C74.046,0.899,73.17,0.022,72.089,0.02z" fill="#FFFFFF"/>
                                    </g>
                                </svg>
                        </a>
                        <?php endif; ?>
                    </div>

                    <span>join got.it:</span>

                </div>

            </div>
            <!-- /site__header-menu -->

        </div>
        <!-- /site__header-layout -->

    </header>
    <!-- site__header -->
