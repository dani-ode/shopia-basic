<?php 
/**
 * Color Palette -
 * Memungkinkan admin mengatur warna website wordpress melalui menu "Customize"
 * 
 * @package Shopia Basic Theme
 */


//add custom color
function theme_customize_register( $wp_customize ) {


    // Nav Background
    $wp_customize->add_setting( 'nav_color', array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'nav_color', array(
        'section' => 'colors',
        'label'   => esc_html__( 'Nav Color', 'theme' ),
    ) ) );

    // Text color
    $wp_customize->add_setting( 'text_color', array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'text_color', array(
        'section' => 'colors',
        'label'   => esc_html__( 'Text color', 'theme' ),
    ) ) );

    // Link color
    $wp_customize->add_setting( 'link_color', array(
        'default'   => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
        'section' => 'colors',
        'label'   => esc_html__( 'Link color', 'theme' ),
    ) ) );

    // Accent color
    $wp_customize->add_setting( 'accent_color', array(
        'default'   => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'accent_color', array(
        'section' => 'colors',
        'label'   => esc_html__( 'Accent color', 'theme' ),
    ) ) );

    // Border color
    $wp_customize->add_setting( 'border_color', array(
        'default'   => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'border_color', array(
        'section' => 'colors',
        'label'   => esc_html__( 'Border color', 'theme' ),
    ) ) );

    // Sidebar background
    $wp_customize->add_setting( 'sidebar_background', array(
        'default'   => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_background', array(
        'section' => 'colors',
        'label'   => esc_html__( 'Sidebar Background', 'theme' ),
    ) ) );

    // Footer Blog
    $wp_customize->add_setting( 'footer_blog', array(
        'default'   => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_blog', array(
        'section' => 'colors',
        'label'   => esc_html__( 'Footer Blog', 'theme' ),
    ) ) );

    // Credit Blog
    $wp_customize->add_setting( 'credit_blog', array(
        'default'   => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'credit_blog', array(
        'section' => 'colors',
        'label'   => esc_html__( 'Credit Blog', 'theme' ),
    ) ) );

    // Hover
    $wp_customize->add_setting( 'button_hover', array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'button_hover', array(
        'section' => 'colors',
        'label'   => esc_html__( 'Button Hover', 'theme' ),
    ) ) );


}
add_action( 'customize_register', 'theme_customize_register' );





//css manipulation
function theme_get_customizer_css() {
    ob_start();

    $nav_color = get_theme_mod( 'nav_color', '' );
    if ( ! empty( $nav_color ) ) {
        ?>
        .navbar, input#submit, .cancel-icon {
            background-color: <?php echo $nav_color; ?>;
        }
        .bg-nav a {
            color: white;
        }
        <?php
    }


    $text_color = get_theme_mod( 'text_color', '' );
    if ( ! empty( $text_color ) ) {
        ?>
        body {
        color: <?php echo $text_color; ?>;
        }
        <?php
    }


    $link_color = get_theme_mod( 'link_color', '' );
    if ( ! empty( $link_color ) ) {
        ?>
        a {
        color: <?php echo $link_color; ?>;
        border-bottom-color: <?php echo $link_color; ?>;
        }
        <?php
    }


    $border_color = get_theme_mod( 'border_color', '' );
    if ( ! empty( $border_color ) ) {
        ?>
        input,
        textarea {
        border-color: <?php echo $border_color; ?>;
        }
        <?php
    }


    $accent_color = get_theme_mod( 'accent_color', '' );
    if ( ! empty( $accent_color ) ) {
        ?>
        a:hover {
        color: <?php echo $accent_color; ?>;
        border-bottom-color: <?php echo $accent_color; ?>;
        }

        button,
        input[type="submit"] {
        background-color: <?php echo $accent_color; ?>;
        }
        <?php
    }


    $sidebar_background = get_theme_mod( 'sidebar_background', '' );
    if ( ! empty( $sidebar_background ) ) {
        ?>
        .sidebar, ul.post-categories li, .dropdown-menu {
        background-color: <?php echo $sidebar_background; ?>;
        border-radius: 10px;
        }
        .social-icon .icon {
        color: <?php echo $sidebar_background; ?>;
        }
        <?php
    }


    $footer_blog = get_theme_mod( 'footer_blog', '' );
    if ( ! empty( $footer_blog ) ) {
        ?>
        .footer-blog {
        background-color: <?php echo $footer_blog; ?>;
        }
        <?php
    }


    $credit_blog = get_theme_mod( 'credit_blog', '' );
    if ( ! empty( $credit_blog ) ) {
        ?>
        .credit-blog {
        background-color: <?php echo $credit_blog; ?>;
        }
        <?php
    }


    $button_hover = get_theme_mod( 'button_hover', '' );
    if ( ! empty( $button_hover ) ) {
        ?>
        input#submit:hover, .cancel-icon:hover {
            background-color: <?php echo $button_hover; ?>;
        }
        .social-icon .icon:hover{
            color: <?php echo $button_hover; ?>;
        }
        <?php
    }






    $css = ob_get_clean();
    return $css;
}
