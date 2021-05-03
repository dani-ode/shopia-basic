<?php 
/**
 * Function Admin
 * Menambahkan menu pengaturan untuk tema Shopia di dashboard Admin
 * 
 * @package Shopia Basic Theme
 */


//Add Shopia Setting on Admin Page
function shopia_add_admin_page(){
    //Generate Shopia Admin Page
    add_menu_page('Shopia Theme Option', 'Shopia', 'manage_options', 'flyup_shopia', 'shopia_theme_create_page', 'dashicons-admin-customizer', 110);
    
    //Generate Shopia Admin Sub Pages
    add_submenu_page('flyup_shopia', 'Shopia Theme Option', 'General', 'manage_options', 'flyup_shopia', 'shopia_theme_create_page');
    add_submenu_page('flyup_shopia', 'Shopia CSS Options', 'Custom CSS', 'manage_options', 'flyup_shopia_css', 'flyup_shopia_settings_page');


    //Activate custom settings
    add_action( 'admin_init', 'sunset_custom_settings' );
}
add_action( 'admin_menu', 'shopia_add_admin_page' );

function sunset_custom_settings(){
    register_setting( 'shopia-settings-group', 'first_name');
    add_settings_section( 'shopia-sidebar-options', 'Sidebar Options', 'shomay_sidebar_options', 'flyup_shopia' );
}

function shopia_theme_create_page() {
    require_once( get_template_directory() . '/inc/templates/shopia-admin.php' );
}
function flyup_shopia_settings_page() {
    //generation of our admin subpage
    echo '<h1>Shopia CSS Options</h1>';
}