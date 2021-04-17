<?php 
/**
 * custom woocommerce function
 * 
 * @package Shopia Theme
 */


//customize sale badge
add_action( 'woocommerce_sale_flash', 'sale_badge_percentage', 25 );
    function sale_badge_percentage() {
        $percentage = '';
        $max_percentage = '';
        global $product;
        if ( ! $product->is_on_sale() ) return;
        if ( $product->is_type( 'simple' ) ) {
            $max_percentage = ( ( $product->get_regular_price() - $product->get_sale_price() ) / $product->get_regular_price() ) * 100;
        } elseif ( $product->is_type( 'variable' ) ) {
            $max_percentage = 0;
            foreach ( $product->get_children() as $child_id ) {
                $variation = wc_get_product( $child_id );
                $price = $variation->get_regular_price();
                $sale = $variation->get_sale_price();
                if ( $price != 0 && ! empty( $sale ) ) $percentage = ( $price - $sale ) / $price * 100;
                if ( $percentage > $max_percentage ) {
            $max_percentage = $percentage;
        }
    }
}
   if ( $max_percentage > 0 ) echo "<span class='onsale'>-" . round($max_percentage) . "%</span>"; // If you would like to show -40% off then add text after % sign
}




/**
 * Show cart contents / total Ajax
 */
add_filter( 'woocommerce_add_to_cart_fragments', 'zmall_woocommerce_header_add_to_cart_fragment' );

function zmall_woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;

	ob_start();

	?>
	<a href="<?php echo wc_get_cart_url(); ?>">
	<span class="badge bg-addition bulat position-absolute cart-count-mobile"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
	</a>
	<?php
	$fragments['span.badge'] = ob_get_clean();
	return $fragments;



	
}//----------------------


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



//Banner
function shopia_banner_images($wp_customize) {
    $wp_customize->add_section( 'sec_shopia_banner', array(
        'title'         => 'Banner Images',
        'description'   => ''
    ) );

        //Banner-1
        $wp_customize->add_setting('set_first_slide');
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'set_first_slide', array(
            'label' => 'First Slide',
            'section' => 'sec_shopia_banner',
            'settings' => 'set_first_slide',
        )));

        //Banner-2
        $wp_customize->add_setting('set_second_slide');
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'set_second_slide', array(
            'label' => 'Second Slide',
            'section' => 'sec_shopia_banner',
            'settings' => 'set_second_slide',
        )));

        //Banner-3
        $wp_customize->add_setting('set_third_slide');
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'set_third_slide', array(
            'label' => 'Third Slide',
            'section' => 'sec_shopia_banner',
            'settings' => 'set_third_slide',
        )));

}
add_action('customize_register', 'shopia_banner_images');



//change Thank You 
add_filter( 'woocommerce_thankyou_order_received_text', 'd4tw_custom_ty_msg' );

    function d4tw_custom_ty_msg ( $thank_you_msg ) {

        $thank_you_msg =  'Terimakasih, pesanan Anda akan segera diproses...';

    return $thank_you_msg;
}

//countdown timer shortcode
function countdown_timer_shortcode() {
    return '<div id="mytimer"></div>';
}
add_shortcode( 'countdowntimer', 'countdown_timer_shortcode' );



// h3 tag in woocoomerce product
remove_action( 'woocommerce_shop_loop_item_title','woocommerce_template_loop_product_title', 10 );
add_action('woocommerce_shop_loop_item_title', 'abChangeProductsTitle', 10 );
function abChangeProductsTitle() {
echo '<h3 class="woocommerce-loop-product__title">' . get_the_title() . '</h3>';
}