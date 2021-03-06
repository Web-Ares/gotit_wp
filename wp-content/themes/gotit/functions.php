<?php

// Define PHP file constants.
define( 'TEMPLATEINC', TEMPLATEPATH . '/inc' );
define( 'TEMPLATEURI', get_template_directory_uri() );
define( 'DIRECT', TEMPLATEURI.'/dist/' );
show_admin_bar( false );

//define('DISALLOW_FILE_MODS',true);

function remove_menus(){

    remove_menu_page( 'edit-comments.php' );
//    remove_menu_page( 'plugins.php' );
    remove_menu_page( 'users.php' );
    remove_menu_page( 'tools.php' );
}
add_action( 'admin_menu', 'remove_menus' );

function wb_paginate_links( $args = '' ) {
    global $wp_query, $wp_rewrite;

    // Setting up default values based on the current URL.
    $pagenum_link = html_entity_decode( get_pagenum_link() );
    $url_parts    = explode( '?', $pagenum_link );

    // Get max pages and current page out of the current query, if available.
    $total   = isset( $wp_query->max_num_pages ) ? $wp_query->max_num_pages : 1;
    $current = get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1;

    // Append the format placeholder to the base URL.
    $pagenum_link = trailingslashit( $url_parts[0] ) . '%_%';

    // URL base depends on permalink settings.
    $format  = $wp_rewrite->using_index_permalinks() && ! strpos( $pagenum_link, 'index.php' ) ? 'index.php/' : '';
    $format .= $wp_rewrite->using_permalinks() ? user_trailingslashit( $wp_rewrite->pagination_base . '/%#%', 'paged' ) : '?paged=%#%';

    $defaults = array(
        'base' => $pagenum_link, // http://example.com/all_posts.php%_% : %_% is replaced by format (below)
        'format' => $format, // ?page=%#% : %#% is replaced by the page number
        'total' => $total,
        'current' => $current,
        'show_all' => false,
        'prev_next' => true,
        'prev_text' => __('&laquo; Previous'),
        'next_text' => __('Next &raquo;'),
        'end_size' => 1,
        'mid_size' => 2,
        'type' => 'plain',
        'add_args' => array(), // array of query args to add
        'add_fragment' => '',
        'before_page_number' => '',
        'after_page_number' => ''
    );

    $args = wp_parse_args( $args, $defaults );

    if ( ! is_array( $args['add_args'] ) ) {
        $args['add_args'] = array();
    }

    // Merge additional query vars found in the original URL into 'add_args' array.
    if ( isset( $url_parts[1] ) ) {
        // Find the format argument.
        $format = explode( '?', str_replace( '%_%', $args['format'], $args['base'] ) );
        $format_query = isset( $format[1] ) ? $format[1] : '';
        wp_parse_str( $format_query, $format_args );

        // Find the query args of the requested URL.
        wp_parse_str( $url_parts[1], $url_query_args );

        // Remove the format argument from the array of query arguments, to avoid overwriting custom format.
        foreach ( $format_args as $format_arg => $format_arg_value ) {
            unset( $url_query_args[ $format_arg ] );
        }

        $args['add_args'] = array_merge( $args['add_args'], urlencode_deep( $url_query_args ) );
    }

    // Who knows what else people pass in $args
    $total = (int) $args['total'];
    if ( $total < 2 ) {
        return;
    }
    $current  = (int) $args['current'];
    $end_size = (int) $args['end_size']; // Out of bounds?  Make it the default.
    if ( $end_size < 1 ) {
        $end_size = 1;
    }
    $mid_size = (int) $args['mid_size'];
    if ( $mid_size < 0 ) {
        $mid_size = 2;
    }
    $add_args = $args['add_args'];
    $r = '';
    $page_links = array();
    $dots = false;

    if ( $args['prev_next'] && $current && 1 < $current ) :
        $link = str_replace( '%_%', 2 == $current ? '' : $args['format'], $args['base'] );
        $link = str_replace( '%#%', $current - 1, $link );
        if ( $add_args )
            $link = add_query_arg( $add_args, $link );
        $link .= $args['add_fragment'];

        /**
         * Filter the paginated links for the given archive pages.
         *
         * @since 3.0.0
         *
         * @param string $link The paginated link URL.
         */
        $page_links[] = '<a class="pagination__item-prev" href="' . esc_url( apply_filters( 'paginate_links', $link ) ) . '">' . $args['prev_text'] . '</a>';

    else:
        $page_links[] = '<span class="pagination__item-prev disabled"></span>';
    endif;

    for ( $n = 1; $n <= $total; $n++ ) :

        if($n ==1){
            $page_links[] = '';
        }

        if ( $n == $current ) :
            $page_links[] = "<span class='pagination__item active'>" . $args['before_page_number'] . number_format_i18n( $n ) . $args['after_page_number'] . "</span>";
            $dots = true;
        else :
            if ( $args['show_all'] || ( $n <= $end_size || ( $current && $n >= $current - $mid_size && $n <= $current + $mid_size ) || $n > $total - $end_size ) ) :
                $link = str_replace( '%_%', 1 == $n ? '' : $args['format'], $args['base'] );
                $link = str_replace( '%#%', $n, $link );
                if ( $add_args )
                    $link = add_query_arg( $add_args, $link );
                $link .= $args['add_fragment'];

                /** This filter is documented in wp-includes/general-template.php */
                $page_links[] = "<a class='pagination__item' href='" . esc_url( apply_filters( 'paginate_links', $link ) ) . "'>" . $args['before_page_number'] . number_format_i18n( $n ) . $args['after_page_number'] . "</a>";
                $dots = true;
            elseif ( $dots && ! $args['show_all'] ) :
                $page_links[] = '<span class="page-numbers dots">' . __( '&hellip;' ) . '</span>';
                $dots = false;
            endif;
        endif;

    endfor;
    if ( $args['prev_next'] && $current && ( $current < $total || -1 == $total ) ) :
        $link = str_replace( '%_%', $args['format'], $args['base'] );
        $link = str_replace( '%#%', $current + 1, $link );
        if ( $add_args )
            $link = add_query_arg( $add_args, $link );
        $link .= $args['add_fragment'];

        /** This filter is documented in wp-includes/general-template.php */
        $page_links[] = '<a class="pagination__item-next" href="' . esc_url( apply_filters( 'paginate_links', $link ) ) . '">' . $args['next_text'] . '</a>';
    else:
        $page_links[] = '<span class="pagination__item-next disabled"></span>';
    endif;
    $page_links[]='';
    switch ( $args['type'] ) {
        case 'array' :
            return $page_links;

        case 'list' :
            $r .= "<ul class='page-numbers'>\n\t<li>";
            $r .= join("</li>\n\t<li>", $page_links);
            $r .= "</li>\n</ul>\n";
            break;

        default :
            $r = join("\n", $page_links);
            break;
    }
    return $r;
}
function theme_pagination() {
    global $posts;
    $pages = '';
    $max = $posts->max_num_pages;
    if (!$current = get_query_var('paged')) $current = 1;
    $a['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
    $a['total'] = $max;
    $a['current'] = $current;

    $total = 1;
    $a['mid_size'] = 2;
    $a['end_size'] = 1;
    $a['prev_text'] = '';
    $a['next_text'] = '';
    $a['class'] = 'new';

    if ($max > 1) echo '<div class="pagination"><div>';

    echo $pages . wb_paginate_links($a);
    if ($max > 1) echo '</div></div>';
}


function get_post_single(){

    $json_data='';
    $post_id = $_GET['id']; ?>


    <?php if( have_rows('content_block',$post_id) ):

        while ( have_rows('content_block',$post_id) ) : the_row(); ?>

            <?php if(get_sub_field('choose_the_type_of_content_part')=='text'){

               $json_data.= get_sub_field('text_block');

            } elseif(get_sub_field('choose_the_type_of_content_part')=='dl'){ ?>


               <?php  $json_data.='<!--sevices__info-->
                <div class="sevices__info">'; ?>

                    <?php if($title = get_sub_field('list_block_title')){
                        $json_data.='<h4 class="sevices__info-title">'.$title.'</h4>';
                     } ?>

                    <?php if( have_rows('list_type',$post_id) ): ?>

                   <?php  $json_data.='<!--sevices__info-list-->
                        <div class="sevices__info-list">'; ?>
                            <?php   while ( have_rows('list_type',$post_id) ) : the_row(); ?>

                        <?php $json_data.='<!--sevices__info-item-->
                                <dl class="sevices__info-item">
                               

                                    <dt>
                                        '.get_sub_field('title').'
                                    </dt>
                                    <dd>
                                        '.get_sub_field('description').'
                                    </dd>

                                </dl>
                                <!--/sevices__info-item-->';


                            endwhile; ?>

                        <?php $json_data.='</div><!--/sevices__info-list-->'; ?>

                    <?php  endif; ?>

                    <?php if($question = get_field('discuss_question_for_service',$post_id)): ?>

                    <?php $json_data.=' <!--sevices__info-title-->
                        <h4 class="sevices__info-title">'.$question.'</h4>
                        <!--/sevices__info-title-->'; ?>


                    <?php endif; ?>

                <?php $json_data.='</div>
                <!--/sevices__info-->'; ?>

            <?php   } ?>


            <?php

        endwhile;
    endif; ?>

    <?php

    echo $json_data;
    exit;
}

add_action('wp_ajax_get_post_single','get_post_single');

add_action('wp_ajax_nopriv_get_post_single', 'get_post_single');


// Load library files.
require_once( TEMPLATEINC . '/cpt.php' );
require_once( TEMPLATEINC . '/template.php' );
require_once( TEMPLATEINC . '/actions.php' );
require_once( TEMPLATEINC . '/optimizes.php' );
