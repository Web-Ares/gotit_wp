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
        $count = 0;
        foreach ($teammates as $key => $post){
            
            if(get_field('show_on_home_page',$post->ID)=='show'){
                $sortTeam[] = $post;
                $count++;
            }

            if($count==($home)): break; endif;
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
        'post__in' => $ids,
        'orderby'	=> 'post__in'
    ));


    return ($reviews)? $reviews : null;
}

function getNextPrevLinks($id){

   

    $cases = get_posts(array(
        'post_type' => 'case',
        'posts_per_page' => -1,
        'post_status' => 'publish'
    ));
    $count  =  count($cases);
    $prev = -1;
    $next = -1;
    for( $i = 0; $i<$count; $i++){

        if($cases[$i]->ID == $id){


            $prev = $cases[$i-1]->ID;
            $next = $cases[$i+1]->ID;

            if($i == 0){
                $prev = $cases[$count-1]->ID;
            }
            if($i == ($count-1)){
                $next = $cases[0]->ID;
            }

        }

    }
    $links['next']  = $next;
    $links['prev'] = $prev;
    return $links;
}

function getSocialLinks($id){
    $links = array();

    $permalink = get_the_permalink($id);
    $title = str_replace( ' ', '%20', get_the_title());
    $excerpt = str_replace( ' ', '%20', get_the_excerpt());
    
    
    $links['facebook'] = 'https://www.facebook.com/sharer/sharer.php?u='.$permalink.'&amp';
    $links['twitter'] = 'https://twitter.com/intent/tweet?text='.$title.'&amp;url='.$permalink.'&amp;';
    $links['google'] = 'https://plus.google.com/share?url='.$permalink;
    $links['in'] = 'https://www.linkedin.com/shareArticle?mini=true&url='.$permalink.'&title='.$title.'&summary='.$excerpt.'';

    
    return $links;
}

