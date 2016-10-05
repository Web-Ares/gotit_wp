
<?php 
$id = get_the_ID();
        if($id == 136): ?>
            <!--case__hero-->
            <div class="case__hero"  style="background-image: url(<?= DIRECT ?>pic/case-w_pic.jpg);">

                <!--case__hero-text-->
                <div class="case__hero-text">
                    <h2 class="site__title">VV Supremo</h2>
                    <p>CORPORATE PORTAL</p>
                </div>
                <!--/case__hero-text-->

                <!--case__links-->
                <div class="case__links">

                    <?php $links = getNextPrevLinks($id); ?>

                    <?php if($links['prev'] != -1): ?>

                        <a class="case__links-prev" href="<?= get_the_permalink($links['prev']) ?>"></a>

                        <?php

                    else: ?>
                        <span class="case__links-prev"></span>
                    <?php endif; ?>

                    <?php if($links['next'] != -1): ?>

                        <a class="case__links-next" href="<?= get_the_permalink($links['next']) ?>"></a>

                        <?php

                    else: ?>
                        <span class="case__links-next"></span>
                    <?php endif; ?>

                </div>
                <!--/case__links-->

                <!--vegetables-->
                <div class="vegetables vegetable3 move move3" data-views='[
                                                                                                    {
                                                                                                    "url":"<?= DIRECT ?>img/vegetable8-mob.png",
                                                                                                    "positions":
                                                                                                        {
                                                                                                        "bottom" : "-50",
                                                                                                        "right" : "-60",
                                                                                                        "width" : "150",
                                                                                                        "height" : "160"
                                                                                                        }
                                                                                                    },
                                                                                                    {
                                                                                                    "url":"<?= DIRECT ?>img/vegetable8-tablet.png",
                                                                                                    "positions":
                                                                                                        {
                                                                                                        "bottom" : "-50",
                                                                                                        "right" : "-80",
                                                                                                        "width" : "280",
                                                                                                        "height" : "299"
                                                                                                        }
                                                                                                    },
                                                                                                    {
                                                                                                    "url":"<?= DIRECT ?>img/vegetable8-desktop.png",
                                                                                                    "positions":
                                                                                                        {
                                                                                                        "bottom" : "5",
                                                                                                        "right" : "-256",
                                                                                                        "width" : "432",
                                                                                                        "height" : "462"
                                                                                                        }
                                                                                                    }
                                                                                                ]'>
                </div>
                <!--vegetables-->

                <!--vegetables-->
                <div class="vegetables vegetable3 move move3" data-views='[
                                                                                                    {
                                                                                                    "url":"<?= DIRECT ?>img/vegetable7-mob.png",
                                                                                                    "positions":
                                                                                                        {
                                                                                                        "bottom" : "-50",
                                                                                                        "right" : "-60",
                                                                                                        "width" : "150",
                                                                                                        "height" : "158"
                                                                                                        }
                                                                                                    },
                                                                                                    {
                                                                                                    "url":"<?= DIRECT ?>img/vegetable7-tablet.png",
                                                                                                    "positions":
                                                                                                        {
                                                                                                        "bottom" : "-50",
                                                                                                        "right" : "-80",
                                                                                                        "width" : "280",
                                                                                                        "height" : "295"
                                                                                                        }
                                                                                                    },
                                                                                                    {
                                                                                                    "url":"<?= DIRECT ?>img/vegetable7-desktop.png",
                                                                                                    "positions":
                                                                                                        {
                                                                                                        "bottom" : "-83",
                                                                                                        "right" : "-100",
                                                                                                        "width" : "414",
                                                                                                        "height" : "436"
                                                                                                        }
                                                                                                    }
                                                                                                ]'>
                </div>
                <!--/vegetables-->

                <!--vegetables-->
                <div class="vegetables vegetable4 move move4" data-views='[
                                                                                                    {
                                                                                                    "url":"<?= DIRECT ?>img/vegetable4-mob.png",
                                                                                                    "positions":
                                                                                                        {
                                                                                                        "bottom" : "-67",
                                                                                                        "left" : "-22",
                                                                                                        "width" : "242",
                                                                                                        "height" : "240"
                                                                                                        }
                                                                                                    },
                                                                                                    {
                                                                                                    "url":"<?= DIRECT ?>img/vegetable4-tablet.png",
                                                                                                    "positions":
                                                                                                        {
                                                                                                        "bottom" : "-57",
                                                                                                        "left" : "-110",
                                                                                                        "width" : "338",
                                                                                                        "height" : "307"
                                                                                                        }
                                                                                                    },
                                                                                                    {
                                                                                                    "url":"<?= DIRECT ?>img/vegetable4-desktop.png",
                                                                                                    "positions":
                                                                                                        {
                                                                                                        "bottom" : "-132",
                                                                                                        "left" : "-114",
                                                                                                        "width" : "677",
                                                                                                        "height" : "619"
                                                                                                        }
                                                                                                    }
                                                                                                ]'>
                </div>
                <!--/vegetables-->

                <!--vegetables-->
                <div class="vegetables vegetable6 move move5" data-views='[
                                                                                                    {
                                                                                                    "url":"<?= DIRECT ?>img/vegetable6-mob.png",
                                                                                                    "positions":
                                                                                                        {
                                                                                                        "bottom" : "96",
                                                                                                        "left" : "55",
                                                                                                        "width" : "121",
                                                                                                        "height" : "163"
                                                                                                        }
                                                                                                    },
                                                                                                    {
                                                                                                    "url":"<?= DIRECT ?>img/vegetable6-tablet.png",
                                                                                                    "positions":
                                                                                                        {
                                                                                                        "bottom" : "173",
                                                                                                        "left" : "40",
                                                                                                        "width" : "138",
                                                                                                        "height" : "186"
                                                                                                        }
                                                                                                    },
                                                                                                    {
                                                                                                    "url":"<?= DIRECT ?>img/vegetable6-desktop.png",
                                                                                                    "positions":
                                                                                                        {
                                                                                                        "bottom" : "390",
                                                                                                        "left" : "66",
                                                                                                        "width" : "167",
                                                                                                        "height" : "225"
                                                                                                        }
                                                                                                    }
                                                                                                ]'>
                </div>
                <!--/vegetables-->

                <!--case__hero-btn-down-->
                <a href="#" class="case__hero-btn-down">down</a>
                <!--/case__hero-btn-down-->

            </div>
            <!--/case__hero-->
<?php elseif($id == 274): ?>
            <!--case__hero-->
            <div class="case__hero case__hero_pure">

                <h2 class="site__main-title">
                    PURENNATURA
                </h2>

                <div class="case__hero-items">

                    <!--bubbles-->
                    <div class="bubbles">
                        <div></div>
                    </div>
                    <!--/bubbles-->

                    <div class="case__hero-woman"></div>

                    <!--case__hero-text-->
                    <div class="case__hero-text">
                        <h2 class="site__title">Pure&Natural</h2>
                        <p>ONLINE STORE</p>
                    </div>
                    <!--/case__hero-text-->


                    <h3 class="case__hero-slogan">

                        <span>YOU ARE</span>
                        <span>WHAT YOU</span>
                        <span>DRINK</span>
                        <span>Bottleless Water Coolers</span>

                    </h3>


                </div>

                <!--case__links-->
                <div class="case__links">

                    <?php $links = getNextPrevLinks($id); ?>

                    <?php if($links['prev'] != -1): ?>

                        <a class="case__links-prev" href="<?= get_the_permalink($links['prev']) ?>"></a>

                    <?php

                    else: ?>
                        <span class="case__links-prev"></span>
                    <?php endif; ?>

                    <?php if($links['next'] != -1): ?>

                        <a class="case__links-next" href="<?= get_the_permalink($links['next']) ?>"></a>

                        <?php

                    else: ?>
                        <span class="case__links-next"></span>
                    <?php endif; ?>

                </div>
                <!--/case__links-->

                <!--vegetables-->
                <div class="vegetables move move3" data-views='[
                                                                                                    {
                                                                                                    "url":"<?= DIRECT ?>img/case-pure-devices-mob.png",
                                                                                                    "positions":
                                                                                                        {
                                                                                                        "top" : "70",
                                                                                                        "right" : "66",
                                                                                                        "width" : "184",
                                                                                                        "height" : "460"
                                                                                                        }
                                                                                                    },
                                                                                                    {
                                                                                                    "url":"",
                                                                                                    "positions":
                                                                                                        {
                                                                                                        "bottom" : "-50",
                                                                                                        "right" : "-80",
                                                                                                        "width" : "280",
                                                                                                        "height" : "519"
                                                                                                        }
                                                                                                    },
                                                                                                    {
                                                                                                    "url":"<?= DIRECT ?>img/case-pure-devices-desktop.png",
                                                                                                    "positions":
                                                                                                        {
                                                                                                        "bottom" : "-100",
                                                                                                        "left" : "150",
                                                                                                        "width" : "385",
                                                                                                        "height" : "713"
                                                                                                        }
                                                                                                    }
                                                                                                ]'>
                </div>
                <!--vegetables-->

                <!--vegetables-->
                <div class="vegetables move move3" data-views='[
                                                                                                    {
                                                                                                    "url":"<?= DIRECT ?>pic/case-pure-pic2.png",
                                                                                                    "positions":
                                                                                                        {
                                                                                                        "bottom" : "0",
                                                                                                        "left" : "66",
                                                                                                        "width" : "160",
                                                                                                        "height" : "253"
                                                                                                        }
                                                                                                    },
                                                                                                    {
                                                                                                    "url":"",
                                                                                                    "positions":
                                                                                                        {
                                                                                                        "bottom" : "-50",
                                                                                                        "right" : "-80",
                                                                                                        "width" : "280",
                                                                                                        "height" : "519"
                                                                                                        }
                                                                                                    },
                                                                                                    {
                                                                                                    "url":"",
                                                                                                    "positions":
                                                                                                        {
                                                                                                        "bottom" : "-100",
                                                                                                        "left" : "150",
                                                                                                        "width" : "385",
                                                                                                        "height" : "713"
                                                                                                        }
                                                                                                    }
                                                                                                ]'>
                </div>
                <!--vegetables-->

                <!--case__hero-btn-down-->
                <a href="#" class="case__hero-btn-down">down</a>
                <!--/case__hero-btn-down-->

            </div>
            <!--/case__hero-->
<?php endif; ?>

