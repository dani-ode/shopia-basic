<?php 
/**
 * Widgets - add widget in Sidebar and Footer
 * 
 * @package Shopia Theme
 */


// sidebar function
function shopia_widget_setup(){

    //sidebar
    register_sidebar( 
        array(
            'name'  => 'Sidebar',
            'id'    => 'sidebar-blog',
            'class' => 'custom',
            'description'   => 'Standard Sidebar',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h6 class="widget-title">',
            'after_title'   => '</h6>'
    ) );

    //footer
    register_sidebar( 
        array(
            'name'  => 'Footer Blog',
            'id'    => 'footer-blog',
            'class' => 'custom',
            'description'   => 'Standard Footer',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h5 class="widget-title">',
            'after_title'   => '</h5>'
    ) );
    register_sidebar( 
        array(
            'name'  => 'Footer Shop 1',
            'id'    => 'footer-shop-1',
            'class' => 'custom',
            'description'   => 'Standard Footer',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h5 class="widget-title">',
            'after_title'   => '</h5>'
    ) );
    register_sidebar( 
        array(
            'name'  => 'Footer Shop 2',
            'id'    => 'footer-shop-2',
            'class' => 'custom',
            'description'   => 'Standard Footer',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h5 class="widget-title">',
            'after_title'   => '</h5>'
    ) );
    register_sidebar( 
        array(
            'name'  => 'Footer Shop 3',
            'id'    => 'footer-shop-3',
            'class' => 'custom',
            'description'   => 'Standard Footer',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h5 class="widget-title">',
            'after_title'   => '</h5>'
    ) );
    register_sidebar( 
        array(
            'name'  => 'Footer Shop 4',
            'id'    => 'footer-shop-4',
            'class' => 'custom',
            'description'   => 'Standard Footer',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h5 class="widget-title">',
            'after_title'   => '</h5>'
    ) );
}
add_action( 'widgets_init', 'shopia_widget_setup');
