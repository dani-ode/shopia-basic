<?php
/*
@package shopia theme
*/

require get_template_directory().'/inc/enqueue.php';
require get_template_directory().'/inc/color-palette.php';
require get_template_directory().'/inc/shopia-functions.php';
require get_template_directory().'/inc/theme-support.php';
require get_template_directory().'/inc/widgets.php';
//require get_template_directory().'/inc/required/tgmpa-config.php';
require get_template_directory().'/inc/walker/class-wp-bootstrap-navwalker.php';
//require get_template_directory().'/inc/function-admin.php';

// cek jika menginstall plugin woocommerce
if(class_exists('woocommerce')){
    require get_template_directory().'/inc/woocommerce-functions.php';
}

//require get_template_directory().'/inc/post-type/portfolio.php';