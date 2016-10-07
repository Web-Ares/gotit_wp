<!DOCTYPE html>
<html lang="en" <?= (is_front_page()) ? 'class="index-page"' : '' ; ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="address=no">

    <link rel="shortcut icon" href="<?php echo DIRECT ?>/favicons/favicon.ico">
    <link rel="icon" sizes="16x16 32x32 64x64" href="<?php echo DIRECT ?>/favicons/favicon.ico">
    <link rel="icon" type="image/png" sizes="196x196" href="<?php echo DIRECT ?>/favicons/favicon-192.png">
    <link rel="icon" type="image/png" sizes="160x160" href="<?php echo DIRECT ?>/favicons/favicon-160.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo DIRECT ?>/favicons/favicon-96.png">
    <link rel="icon" type="image/png" sizes="64x64" href="<?php echo DIRECT ?>/favicons/favicon-64.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo DIRECT ?>/favicons/favicon-32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo DIRECT ?>/favicons/favicon-16.png">
    <link rel="apple-touch-icon" href="<?php echo DIRECT ?>/favicons/favicon-57.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo DIRECT ?>/favicons/favicon-114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo DIRECT ?>/favicons/favicon-72.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo DIRECT ?>/favicons/favicon-144.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo DIRECT ?>/favicons/favicon-60.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo DIRECT ?>/favicons/favicon-120.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo DIRECT ?>/favicons/favicon-76.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo DIRECT ?>/favicons/favicon-152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo DIRECT ?>/favicons/favicon-180.png">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="/favicon-144.png">
    <meta name="msapplication-config" content="<?php echo DIRECT ?>/favicons/browserconfig.xml">
    
    <title><?php wp_title(''); ?></title>
    <?php wp_head(); ?>
    
    <?php if (is_page() || is_single() || is_singular() || is_404() || is_tax() || is_category() || is_tax() ) {
        the_post();
    } ?>


    <style>
        .preloader{
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            z-index: 10;
            background: rgba(0,0,0,1);
        }
        .preloader > img {
            position: absolute;
            left: 50%;
            top: 40%;
            max-width: 354px;
            z-index: 3;
            -webkit-transition: opacity 500ms ease-in-out;
            transition: opacity 500ms ease-in-out;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }
        .preloader_loaded > svg,
        .preloader_loaded > div{
            opacity: 0;
        }
        .preloader__points {
            overflow: hidden;
            position: absolute;
            top: 60%;
            left: 50%;
            margin-left: -150px;
            height: 50px;
            width: 300px;
            -webkit-transform: translate(0, -50%);
            transform: translate(0, -50%);
        }
        .preloader__points span {
            overflow: hidden;
            opacity: 1;
            display: block;
            position: absolute;
            top: 50%;
            left: 50%;
            margin: -8px 0 0 -8px;
            width: 16px;
            height: 16px;
            background: #fff;
            border: 2px solid #fff;
            border-radius: 16px;
            text-indent: -9999px;
            -webkit-transform: translate3d(60px, 0, 0);
            transform: translate3d(60px, 0, 0);
        }
        .preloader__points span:nth-child(1) {
            -webkit-animation: google 1.75s ease-in-out infinite;
            animation: google 1.75s ease-in-out infinite;
        }
        .preloader__points span:nth-child(2) {
            -webkit-animation: google 1.75s ease-in-out infinite 0.3s;
            animation: google 1.75s ease-in-out infinite 0.3s;
        }
        .preloader__points span:nth-child(3) {
            -webkit-animation: google 1.75s ease-in-out infinite 0.6s;
            animation: google 1.75s ease-in-out infinite 0.6s;
        }

        @-webkit-keyframes google {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(250%, 0, 0);
                transform: translate3d(250%, 0, 0);
            }
            30% {
                opacity: 1;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
            70% {
                opacity: 0.5;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
            100% {
                opacity: 0;
                -webkit-transform: translate3d(-250%, 0, 0);
                transform: translate3d(-250%, 0, 0);
            }
        }
        @keyframes google {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(250%, 0, 0);
                transform: translate3d(250%, 0, 0);
            }
            30% {
                opacity: 1;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
            70% {
                opacity: 0.5;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
            100% {
                opacity: 0;
                -webkit-transform: translate3d(-250%, 0, 0);
                transform: translate3d(-250%, 0, 0);
            }
        }

        @media (max-width: 768px) {
            .preloader > img {
                width: 90%;
                height: auto;
            }
        }


    </style>
    
</head>

<body data-action="<?php echo admin_url( 'admin-ajax.php' );?>">

<!-- site -->
<div class="site<?= (!is_front_page())? ' site_inner': '' ; ?>">

    <!-- preloader -->
    <div class="preloader">
        <div class='preloader__points'>
            <span>.</span>
            <span>.</span>
            <span>.</span>
        </div>
        <img src="<?= DIRECT ?>img/logo.png" width="354" height="63" alt="">
    </div>
    <!-- /preloader -->
    
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
            <?php if(is_page_template(array('page-blog.php','page-contact.php','page-services.php','page-team.php')) || is_singular('service') || is_singular('post') ): ?>
            <h1 class="site__title site__title_3 site__header-title"><?php the_title() ?></h1>
            <?php endif; ?>
        </div>
        <!-- /site__header-layout -->

    </header>
    <!-- site__header -->
