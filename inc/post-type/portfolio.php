<?php 
/**
 * Portfolio - custom post type
 * 
 * @package Shopia Theme
 */


// Custom Post Type 
function shopia_custom_post_type(){
    $label = array(
        'name'          => 'Portfolio',
        'singular_name' => 'Portfolio',
        'add_new'       => 'Add Item',
        'all_items'     => 'All Item',
        'add_new_item'  => 'Add Item',
        'edit_item'     => 'Edit Item',
        'new_item'      => 'New Item',
        'view_item'     => 'View Item',
        'search_item'   => 'Search Portfolio',
        'not_found'     => 'No Items Found',
        'not_found_in_trash'    => 'No Items Found In Trash',
        'perent_item_colon'     => 'Parent Item'
    );
    $args = array(
        'labels'    => $label,
        'public'    => true,
        'has_archive'   => true,
        'public_queryable'  => true,
        'query_var'     => true,
        'rewrite'       => true,
        'capability_type'   => 'post',
        'herarchical'   => false,
        'supports'      => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revisions'
        ),
        //'taxonomies'    => array( 'category', 'post_tag'),
        'menu_posotion' => 5,
        'exclude_from_search'   => false
    );
    register_post_type( 'portfolio', $args );
}
add_action( 'init', 'shopia_custom_post_type' );


//Custom Taxonomies
function shopia_custom_taxonomies(){
    //add new taxonomy hierarchical
    $labels = array(
        'name'          => 'Fields',
        'singular_name' => 'type',
        'search_itemc'  => 'Search Types',
        'all_items'     => 'All Type',
        'parent_item'   => 'Parent Type',
        'parent_item_colon'   => 'Parent Type:',
        'edit_item'     => 'Edit Type',
        'update_item'   => 'Update Item',
        'add_new_item'  => 'Add New Type',
        'new_item_name' => 'New type Name',
        'menu_name'     => 'Fields'
    );
    $args = array(
        'hierarchical'  => 'true',
        'labels'        => $labels,
        'show_ui'       => true,
        'show_admin_column' => true,
        'query_var'     => true,
        'rewrite'       => array( 'slug' =>'field' )
    );
    register_taxonomy( 'field', array('portfolio'), $args );

    //add new taxonomy NOT hierarchical
    register_taxonomy( 'software', 'portfolio', array(
        'label'         => 'Software',
        'rewrite'       => array('slug' => 'software'),
        'hierarchical'  => false

    ) );
}
add_action( 'init','shopia_custom_taxonomies' );