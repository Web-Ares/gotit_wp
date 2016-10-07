
<!--sevices-->
<div class="sevices">

    <!--sevices__wrap-->
    <div class="sevices__wrap">

        
        <?php if( have_rows('content_block') ):

                    while ( have_rows('content_block') ) : the_row(); ?>

                        <?php if(get_sub_field('choose_the_type_of_content_part')=='text'){

                            the_sub_field('text_block');

                        } elseif(get_sub_field('choose_the_type_of_content_part')=='dl'){ ?>


                                <!--sevices__info-->
                                <div class="sevices__info">

                            <?= ($title = get_sub_field('list_block_title'))?
                                '<h4 class="sevices__info-title">'.$title.'</h4>'  : ''; ?>

                                    <?php if( have_rows('list_type') ): ?>

                                    <!--sevices__info-list-->
                                    <div class="sevices__info-list">
                                        <?php   while ( have_rows('list_type') ) : the_row(); ?>

                                            <!--sevices__info-item-->
                                            <dl class="sevices__info-item">

                                                <dt>
                                                    <?php the_sub_field('title') ?>
                                                </dt>
                                                <dd>
                                                    <?php the_sub_field('description') ?>
                                                </dd>

                                            </dl>
                                            <!--/sevices__info-item-->

                                            <?php

                                        endwhile; ?>

                                        </div>
                                        <!--/sevices__info-list-->
                                       <?php  endif; ?>

                                        <?php if($question = get_field('discuss_question_for_service')): ?>
                                            <!--sevices__info-title-->
                                            <h4 class="sevices__info-title"><?= $question ?></h4>
                                            <!--/sevices__info-title-->

                                        <?php endif; ?>

                            </div>
                            <!--/sevices__info-->
                     <?php   } ?>


                        <?php

                    endwhile;
                endif; ?>

    </div>
    <!--/sevices__wrap-->

</div>
<!--/sevices-->