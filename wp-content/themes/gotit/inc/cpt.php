<?php
// Register Custom Post Type
add_action('init', 'custom_post_type', 0);

function custom_post_type()
{
    $labels = array(

        'name' => 'Services',
        'singular_name' => 'Service',
        'menu_name' => 'Services',
        'all_items' => 'All Services',
        'view_item' => 'View Service',
        'add_new_item' => 'Add Service',
        'add_new' => 'Add Service',
        'edit_item' => 'Edit',
        'update_item' => 'Update',
        'search_items' => 'Search'
    );


    $args = array(
        'labels' => $labels,
        'supports' => array('title'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => true,
        'can_export' => true,
        'has_archive' => false,
        'exclude_from_search' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'rewrite' => array(
            'with_front' => true
        )
    );

    register_post_type('service', $args);

    $labels = array(

        'name' => 'Cases',
        'singular_name' => 'Case',
        'menu_name' => 'Cases',
        'all_items' => 'All Cases',
        'view_item' => 'View Case',
        'add_new_item' => 'Add Case',
        'add_new' => 'Add Case',
        'edit_item' => 'Edit',
        'update_item' => 'Update',
        'search_items' => 'Search'
    );


    $args = array(
        'labels' => $labels,
        'supports' => array('title'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => true,
        'can_export' => true,
        'has_archive' => false,
        'exclude_from_search' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'rewrite' => array(
            'with_front' => true
        )
    );

    register_post_type('case', $args);

    $labels = array(

        'name' => 'Team',
        'singular_name' => 'Teammate',
        'menu_name' => 'Teammates',
        'all_items' => 'All Teammates',
        'view_item' => 'View Teammate',
        'add_new_item' => 'Add Teammate',
        'add_new' => 'Add Teammate',
        'edit_item' => 'Edit',
        'update_item' => 'Update',
        'search_items' => 'Search'
    );


    $args = array(
        'labels' => $labels,
        'supports' => array('title'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => true,
        'can_export' => true,
        'has_archive' => false,
        'exclude_from_search' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'rewrite' => array(
            'with_front' => true
        )
    );

    register_post_type('team', $args);

}
