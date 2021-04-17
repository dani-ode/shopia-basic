<!-- for mobile -->
<?php if ( wp_is_mobile() ): ?>

    <?php get_template_part('/template-parts/navbar/nav-shop-mobile');?>

<?php if (is_front_page()): ?>
<header id="header-mobile" class="navbar nav-front-page s-shadow text-light sticky-top pt-2 pb-2">
<?php else: ?>
<header id="header-mobile" class="navbar s-shadow text-light bg-primary sticky-top pt-2 pb-2">
<?php endif; ?>
    <div class="container">

        <div class="row navshop-mobile">
            <div class="col-1 m-auto">
                <div id="nav-target" class="logo-secondary p-1 bg-dark bulat">
                <img src="<?php echo get_theme_mod( 'square_logo'); ?>" alt="">
                </div>
            </div>
            <div class="col align-content-center kekiri-1">
                <div class="search-shop-container">
                    <?php get_search_form() ?>
                </div>
            </div>
            <div class="col-1 m-auto text-end">
            <a href="<?php echo wc_get_cart_url(); ?>">
                <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-basket2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M4 10a1 1 0 0 1 2 0v2a1 1 0 0 1-2 0v-2zm3 0a1 1 0 0 1 2 0v2a1 1 0 0 1-2 0v-2zm3 0a1 1 0 1 1 2 0v2a1 1 0 0 1-2 0v-2z"/>
                <path fill-rule="evenodd" d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-.623l-1.844 6.456a.75.75 0 0 1-.722.544H3.69a.75.75 0 0 1-.722-.544L1.123 8H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 6h1.717L5.07 1.243a.5.5 0 0 1 .686-.172zM2.163 8l1.714 6h8.246l1.714-6H2.163z"/>
                </svg>
                <span class="badge bg-addition bulat position-absolute cart-count-mobile"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
            </a>
            </div>
        </div>
    </div>
</header>

<?php else : ?>
<div class="bg-v-d text-light d-none d-md-block pb-1 z-index-1">
    <div class="container">
        <div class="row">
            <div class="col">

                <a href="<?php echo get_theme_mod('set_facebook'); ?>">
                <small class="m-1 hover">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook text-light" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                    </svg>
                </small>
                </a>
                

                <a href="https://api.whatsapp.com/send?phone=<?php echo get_theme_mod('set_whatsapp'); ?>&text=Hi%20Admin%20Shopia,%0D%0A%0D%0A">
                <small class="m-1 hover">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp text-light" viewBox="0 0 16 16">
                    <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                    </svg>
                </small>
                </a>

                <a href="<?php echo get_theme_mod('set_instagram'); ?>">
                <small class="m-1 hover">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram text-light" viewBox="0 0 16 16">
                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                    </svg>
                </small>
                </a>
                <small class="badge bg-primary hover">
                <a href="<?php echo home_url( '/wishlist' ); ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-heart text-light" viewBox="0 0 16 16">
                    <path d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                    </svg>
                    <small>Wishlist</small>
                </a>
                </small>

            </div>
            <div class="col text-end">
                <?php if (class_exists("WooCommerce")): ?>
                    <?php if (is_user_logged_in()): ?>
                    <a class="text-light"><small>Welcome back <?php global $current_user; wp_get_current_user(); echo $current_user->display_name ; ?> | </small></a>
                    <a class="badge bg-primary text-light hover" href="<?php echo get_permalink( get_option( 'woocommerce_myaccount_page_id' ) ); ?>">My Account</a>
                    <a class="badge bg-addition text-light hover" href="<?php echo wp_logout_url( home_url() ); ?>">Log Out</a>
                    <?php else: ?>
                    <a class="text-light hover" href="<?php echo get_permalink( get_option( 'woocommerce_myaccount_page_id' ) ); ?>"><small class="fw-bold">Login/Daftar</small></a>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<header id="header-1" class="text-light bg-primary d-none d-md-block sticky-top">
    <nav class="navbar s-shadow navbar-expand-lg">
        <div class="container mt-2">
            <div class="row">
                <div class="col-2 mt-2">
                    <?php if (has_custom_logo()) : ?>
                        <figure class="navbar-brand hover">
                            <?php the_custom_logo(); ?>
                        </figure>
                        <?php else: ?>
                        <a class="navbar-brand text-v-l hover" href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a>
                    <?php endif; ?>
                </div>
                <div class="col-9">
                    <div class="search-shop-mobile d-none d-md-block">
                        <?php get_search_form() ?>
                    </div>
                    <div class="categories-search">
                        <small class="navbar-shop-small">
                            <?php 
                                wp_nav_menu( array(
                                    'theme_location'    =>  'shop',
                                    'container'         =>  false,
                                    'menu_class'        =>  'navbar-nav text-v-l',                       ) 
                                );
                            ?>
                        </small>
                    </div>
                </div>


                <div class="col-1 mt-2">
                <a href="<?php echo wc_get_cart_url(); ?>">
                    <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="text-white bi bi-basket2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 10a1 1 0 0 1 2 0v2a1 1 0 0 1-2 0v-2zm3 0a1 1 0 0 1 2 0v2a1 1 0 0 1-2 0v-2zm3 0a1 1 0 1 1 2 0v2a1 1 0 0 1-2 0v-2z"/>
                        <path fill-rule="evenodd" d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-.623l-1.844 6.456a.75.75 0 0 1-.722.544H3.69a.75.75 0 0 1-.722-.544L1.123 8H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 6h1.717L5.07 1.243a.5.5 0 0 1 .686-.172zM2.163 8l1.714 6h8.246l1.714-6H2.163z"/>
                    </svg>
                    <span class="badge bg-addition bulat position-absolute cart-count-mobile"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
                </a>
                </div>


            </div>
        </div>
    </nav>
</header>
<?php endif; ?>