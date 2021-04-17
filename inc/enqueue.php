<?php 
/**
 * Enqueue - Load CSS & Javascript
 * 
 * @package Shopia Theme
 */

function shopia_script_enqueue(){
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap/bootstrap.min.css', array(), '5.0', 'all' );
    wp_enqueue_style('shopia', get_template_directory_uri().'/assets/css/shopia/shopia.css', array(), '1.0.0', 'all' );
    
    wp_enqueue_style( 'theme-styles', get_stylesheet_uri() ); // This is where you enqueue your theme's main stylesheet
    $custom_css = theme_get_customizer_css();
    wp_add_inline_style( 'theme-styles', $custom_css );
    
    // cek jika menginstall plugin woocommerce
    if(class_exists('woocommerce')){
        wp_enqueue_style('woocommerce', get_template_directory_uri().'/assets/css/woocommerce/woocommerce.css', array(), '1.0.0', 'all' );
        wp_enqueue_script('wooscript', get_template_directory_uri().'/assets/js/wooscript.js', array('jquery'), '1.0.0', true );

    }
    // wp_enqueue_script('shopiajquery', get_template_directory_uri().'/assets/js/jquery-3.5.1.min.js', array(), '3.5.1', true );
    wp_enqueue_script('bootstrapscript', get_template_directory_uri().'/assets/js/bootstrap.bundle.min.js', array(), '5.0', true );
    wp_enqueue_script('shopiascript', get_template_directory_uri().'/assets/js/shopia.js', array('jquery'), '1.0.0', true );
    
    
}
add_action( 'wp_enqueue_scripts', 'shopia_script_enqueue');