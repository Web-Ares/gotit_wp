<?php

function getServices(){

    $services = get_posts(array(
        'post_type' => 'service',
        'posts_per_page' => -1,
        'post_status' => 'publish'
    ));
    
    return ($services)? $services : null;
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

