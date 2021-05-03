<?php 
/**
 * Color Palette -
 * Memungkinkan admin mengatur warna website wordpress melalui menu "Customize"
 * 
 * @package Shopia Basic Theme
 */




//add custom color
function theme_customize_register( $wp_customize ) {


    //Very Light
    $wp_customize->add_setting( 'very_light', array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'very_light', array(
        'section' => 'colors',
        'label'   => esc_html__( 'Very Light', 'theme' ),
    ) ) );

    //Light
    $wp_customize->add_setting( 'light', array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'light', array(
        'section' => 'colors',
        'label'   => esc_html__( 'Light', 'theme' ),
    ) ) );

    //Primary
    $wp_customize->add_setting( 'primary', array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'primary', array(
        'section' => 'colors',
        'label'   => esc_html__( 'Primary', 'theme' ),
    ) ) );

    //Dark
    $wp_customize->add_setting( 'dark', array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dark', array(
        'section' => 'colors',
        'label'   => esc_html__( 'Dark', 'theme' ),
    ) ) );

    //Very Dark
    $wp_customize->add_setting( 'very_dark', array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'very_dark', array(
        'section' => 'colors',
        'label'   => esc_html__( 'Very Dark', 'theme' ),
    ) ) );

    //Addition Light
    $wp_customize->add_setting( 'addition_light', array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'addition_light', array(
        'section' => 'colors',
        'label'   => esc_html__( 'Addition Light', 'theme' ),
    ) ) );

    //Addition
    $wp_customize->add_setting( 'addition', array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'addition', array(
        'section' => 'colors',
        'label'   => esc_html__( 'Addition', 'theme' ),
    ) ) );

    //Addition Dark
    $wp_customize->add_setting( 'addition_dark', array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'addition_dark', array(
        'section' => 'colors',
        'label'   => esc_html__( 'Addition Dark', 'theme' ),
    ) ) );

    //White
    $wp_customize->add_setting( 'white', array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'white', array(
        'section' => 'colors',
        'label'   => esc_html__( 'White', 'theme' ),
    ) ) );

    //Gray
    $wp_customize->add_setting( 'gray', array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gray', array(
        'section' => 'colors',
        'label'   => esc_html__( 'Gray', 'theme' ),
    ) ) );

    //Black
    $wp_customize->add_setting( 'black', array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'black', array(
        'section' => 'colors',
        'label'   => esc_html__( 'Black', 'theme' ),
    ) ) );










}
add_action( 'customize_register', 'theme_customize_register' );





//css manipulation
function theme_get_customizer_css() {
    ob_start();


    //very Light
    $very_light = get_theme_mod( 'very_light', '' );
    if ( ! empty( $very_light ) ) {
        ?>
        .bg-v-l {
            background-color: <?php echo $very_light; ?>;
        }
        .text-v-l,.text-v-l a{
            color:<?php echo $very_light; ?>;
        }
        .footer-blog {
            box-shadow: 10px -50px 50px <?php echo $very_light; ?>;
        } 
        
        <?php
    }

    //Light
    $light = get_theme_mod( 'light', '' );
    if ( ! empty( $light ) ) {
        ?>
        .bg-light,ul.post-categories li,li.product-category.product{
            background-color: <?php echo $light; ?> !important;
        }
        .text-light,.text-light a,.footer-nav a{
            color:<?php echo $light; ?> !important;
        }
        <?php
    }

    //Primary
    $primary = get_theme_mod( 'primary', '' );
    if ( ! empty( $primary ) ) {
        ?>
        .bg-primary,input#submit, .wp-block-button__link,option:checked,option:hover,.woocommerce a.button.alt, .woocommerce button.button.alt,a.button.product_type_simple.add_to_cart_button  {
            background-color: <?php echo $primary; ?> !important;
        }
        .text-primary,.text-primary a{
            color:<?php echo $primary; ?> !important;
        }
        select {
            box-shadow: 0 2px 5px <?php echo $primary; ?> !important;
        }
        <?php
    }

    //Dark
    $dark = get_theme_mod( 'dark', '' );
    if ( ! empty( $dark ) ) {
        ?>
        .bg-dark, .select2-container--default .select2-results__option--highlighted[aria-selected], .select2-container--default .select2-results__option--highlighted[data-selected],.woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover{
            background-color: <?php echo $dark; ?> !important;
        }
        .text-dark,.text-dark a{
            color:<?php echo $dark; ?> !important;
        }
        <?php
    }

    //Very Dark
    $very_dark = get_theme_mod( 'very_dark', '' );
    if ( ! empty( $very_dark ) ) {
        ?>
        .bg-v-d{
            background-color: <?php echo $very_dark; ?>;
        }
        .text-v-d,.text-v-d a,h1.woocommerce-products-header__title.page-title{
            color:<?php echo $very_dark; ?>;
        }
        <?php
    }

    //Addition Light
    $addition_light = get_theme_mod( 'addition_light', '' );
    if ( ! empty( $addition_light ) ) {
        ?>
        .bg-a-l,.dropdown-item.active, .dropdown-item:active, .dropdown-item:hover{
            background-color: <?php echo $addition_light; ?>;
        }
        .text-a-l,.text-a-l a{
            color:<?php echo $addition_light; ?>;
        }
        <?php
    }

    //Addition
    $addition = get_theme_mod( 'addition', '' );
    if ( ! empty( $addition ) ) {
        ?>
        .bg-addition,span.onsale, h2.woocommerce-loop-category__title, h2.woocommerce-loop-category__title mark.count {
            background-color: <?php echo $addition; ?> !important;
        }
        .text-addition,.text-addition a,span.woocommerce-Price-amount.amount,.icon-footer a:hover{
            color:<?php echo $addition; ?>;
        }
        ::-webkit-scrollbar-thumb{
            background: <?php echo $addition; ?>;
        }
        <?php
    }

    //Addition Dark
    $addition_dark = get_theme_mod( 'addition_dark', '' );
    if ( ! empty( $addition_dark ) ) {
        ?>
        .bg-a-d{
            background-color: <?php echo $addition_dark; ?>;
        }
        .text-a-d,.text-a-d a{
            color:<?php echo $addition_dark; ?>;
        }
        ::-webkit-scrollbar-thumb:hover{
            background: <?php echo $addition_dark; ?>;
        }
        <?php
    }

    //White
    $white = get_theme_mod( 'white', '' );
    if ( ! empty( $white ) ) {
        ?>
        .bg-white,input, .input-text, textarea,li.product,tr.woocommerce-cart-form__cart-item.cart_item,.cart_totals table.shop_table.shop_table_responsive{
            background-color: <?php echo $white; ?>;
        }
        .text-white,.text-white a, .navbar-brand:hover,input#submit, .wp-block-button__link,a.button.product_type_simple.add_to_cart_button, h2.woocommerce-loop-category__title, h2.woocommerce-loop-category__title mark.count {
            color:<?php echo $white; ?>;
        }
        <?php
    }

    //Gray
    $gray = get_theme_mod( 'gray', '' );
    if ( ! empty( $gray ) ) {
        ?>
        .bg-gray{
            background-color: <?php echo $gray; ?>;
        }
        .text-gray,.text-gray a,.flex-viewport,.woocommerce-product-gallery__image{
            color:<?php echo $gray; ?>;
        }
        input, .input-text, textarea {
            border: 2px solid <?php echo $gray; ?>;
        }
        <?php
    }

    //Black
    $black = get_theme_mod( 'black', '' );
    if ( ! empty( $black ) ) {
        ?>
        .bg-black{
            background-color: <?php echo $black; ?>;
        }
        .text-black,h2.woocommerce-loop-product__title,.icon-footer a{
            color:<?php echo $black; ?>;
        }
        <?php
    }














    $css = ob_get_clean();
    return $css;
}
