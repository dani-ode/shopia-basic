<header id="header-1" class="sticky-top">
    <nav class="navbar s-shadow navbar-expand-lg bg-primary">
        <div class="container">
           

            <?php if (has_custom_logo()) : ?>
                <figure class="navbar-brand hover">
                    <?php the_custom_logo(); ?>
                </figure>
                <?php else: ?>
                <a class="navbar-brand text-white hover" href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a>
            <?php endif; ?>

            <div class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-text-left text-white hover" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2 12.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
                </svg>
            </div>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <?php 
                    wp_nav_menu( array(
                        'theme_location'    =>  'primary',
                        'container'         =>  false,
                        'menu_class'        =>  'navbar-nav text-white',
                        'walker'            =>  new WP_Bootstrap_Navwalker())
                    );
                ?>

                <div class="login-button">
                    <button class="btn bg-addition text-white bulat hover">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                    <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
                    </svg>
                    Login
                    </button>
                </div>
            </div>
        </div>
    </nav>
</header>