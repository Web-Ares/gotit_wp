<?php

function getServices(){

    $services = get_posts(array(
        'post_type' => 'service',
        'posts_per_page' => -1,
        'post_status' => 'publish'
    ));
    
    return ($services)? $services : null;
}

function getCases(){

    $cases = get_posts(array(
        'post_type' => 'case',
        'posts_per_page' => -1,
        'post_status' => 'publish'
    ));

    return ($cases)? $cases : null;
}

function getTeammates( $home = -1){
    
    
    $teammates = get_posts(array(
        'post_type' => 'team',
        'posts_per_page' => -1,
        'post_status' => 'publish',
        ));

    if($home!=-1){

        $sortTeam =array();

        foreach ($teammates as $key => $post){


            if(get_field('show_on_home_page',$post->ID)=='show'){
                $sortTeam[] = $post;
            }

            if($key==($home-1)): break; endif;
        }
        $teammates = $sortTeam;
    }

    return ($teammates)? $teammates : null;

}

function getImagesAttributes( $type, $id ){

    $attributes = array();
    
    if($type==='thumb'):
        $attributes['alt'] = get_post_meta($id , '_wp_attachment_image_alt', true);
        
        $attributes['url'] = wp_get_attachment_image_src($id,'full')[0];
      
        $attributes['description'] = get_post($id)->post_content;
    
    endif;
    
    return $attributes;
}

function getAcfImages ($image){
    $attr= array();

    $imageID = $image['ID'];
    $attr['alt'] = get_post_meta($imageID , '_wp_attachment_image_alt', true);
    $attr['description'] = $image['description'];
    $attr['url'] = $image['url'];
    
    return $attr;
}

function getReviews($ids){

    $reviews = get_posts(array(
        'post_type' => 'review',
        'post_status' => 'publish',
        'post__in' => $ids
    ));

    return ($reviews)? $reviews : null;
}