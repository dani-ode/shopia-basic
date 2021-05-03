<?php 
/**
 * Shopia function
 * 
 * @package shopia Basic package
 */


//theme setup
function shopia_theme_setup(){
    add_theme_support( 'menus' );
    
    register_nav_menu( 'primary', 'Prymary Header Navigation' );
    register_nav_menu( 'secondary', 'Footer Navigation' );
}
add_action( 'init', 'shopia_theme_setup' );


//the excerpt
function get_excerpt_length($length){
    return 12;
}
function return_excerpt_text(){
    return '...';
}
add_filter('excerpt_more', 'return_excerpt_text', 999);
add_filter('excerpt_length', 'get_excerpt_length');


//Remove Version
function shopia_remove_version(){
    return '';
}
add_filter( 'the_generator','shopia_remove_version' );




//Square Logo
function customizer_square_log_setting($wp_customize) {
// add a setting 
    $wp_customize->add_setting('square_logo');
// Add a control to upload the hover logo
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'square_logo', array(
        'label' => 'Square Logo',
        'section' => 'title_tagline', //this is the section where the custom-logo from WordPress is
        'settings' => 'square_logo',
        'priority' => 8 // show it just below the custom-logo
    )));
}

add_action('customize_register', 'customizer_square_log_setting');



// CUSTOM ADMIN LOGIN HEADER LOGO
if (has_custom_logo()) :
    function my_custom_login_logo()
    {
        // $logo = get_theme_mod( 'custom_logo' );
        // $image = wp_get_attachment_image_src( $logo , 'full' );
        // $image_url = $image[0];
        echo '<style  type="text/css"> h1 a {  background-image:url(' . get_theme_mod( 'square_logo') . ')  !important; border-radius: 200px; background-color: gray; } </style>';
    }
    add_action('login_head',  'my_custom_login_logo');
endif;


/**
 * Shopia Customize
 */

//copryright
function shopia_copyright_customizer($wp_customize){
    $wp_customize->add_section( 'sec_copyright', array(
        'title'         => 'Copyright Section',
        'description'   => ''
    ) );
    $wp_customize->add_setting( 'set_copyright', array(
        'type'          => 'theme_mod',
        'default'       => '',
        'saniteze_callback' => 'satitize_text_field'
    ) );
    $wp_customize->add_control( 'set_copyright', array(
        'label'         => 'Copyright',
        'description'   => 'Please Fill the Copyright Text',
        'section'       => 'sec_copyright',
        'type'          => 'text'
    ) );

}
add_action( 'customize_register', 'shopia_copyright_customizer' );



//social icons
function social_media_url($wp_customize){
    $wp_customize->add_section( 'sec_social_media_url', array(
        'title'         => 'Social Media Url',
        'description'   => ''
    ) );

        //Facebook
        $wp_customize->add_setting( 'set_facebook', array(
            'type'          => 'theme_mod',
            'default'       => '',
            'saniteze_callback' => 'satitize_text_field'
        ) );
        $wp_customize->add_control( 'set_facebook', array(
            'label'         => 'Facebook',
            'description'   => '',
            'section'       => 'sec_social_media_url',
            'type'          => 'text'
        ) );

        //WhatsApp
        $wp_customize->add_setting( 'set_whatsapp', array(
            'type'          => 'theme_mod',
            'default'       => '',
            'saniteze_callback' => 'satitize_text_field'
        ) );
        $wp_customize->add_control( 'set_whatsapp', array(
            'label'         => 'WhatsApp Number',
            'description'   => '',
            'section'       => 'sec_social_media_url',
            'type'          => 'text'
        ) );

        //Instagram
        $wp_customize->add_setting( 'set_instagram', array(
            'type'          => 'theme_mod',
            'default'       => '',
            'saniteze_callback' => 'satitize_text_field'
        ) );
        $wp_customize->add_control( 'set_instagram', array(
            'label'         => 'Instagram',
            'description'   => '',
            'section'       => 'sec_social_media_url',
            'type'          => 'text'
        ) );

}
add_action( 'customize_register', 'social_media_url' );