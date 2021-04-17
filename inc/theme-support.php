<?php 
/**
 * Theme Support - 
 * Lihat apa saja yang di support oleh tema ini
 * 
 * @package Shopia Theme
 * 
 */


//theme support
add_theme_support( 'custom-logo', array(
	'height'      => 100,
	'width'       => 400,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );
add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-formats', array('aside', 'image', 'video') );
add_theme_support( 'html5', array('search-form'));
add_theme_support( 'woocommerce');
add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );
